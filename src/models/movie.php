<?php

require_once __ROOT__ . '/lib/db.php';

class Movie {
    public $id;
    public $title;
    public $description;
    public $release_year;
    public $rental_duration;
    public $rental_rate;
    public $length;
    public $replacement_cost;
    public $rating;
    public $last_update;
    public $special_features;
    public $full_text;

    /**
     * @param int $id
     */
    static function get($id) {
        $db_conn = Database::getConnection();
        $query = $db_conn->prepare("SELECT `Movie`.`ID`, `Movie`.`Title`, `Movie`.`Description`, `Movie`.`Release_Year`, `Movie`.`Rental_Duration`, `Movie`.`Rental_Rate`, `Movie`.`Length`, `Movie`.`Replacement_Cost`, `Movie`.`Rating`, `Movie`.`Last_Update`, `Movie`.`Special_Features`, `Movie`.`Fulltext` FROM Movie WHERE ID=?");
        $query->bind_param("i", $id);
        
        if($query->execute()) {
            $result = $query->get_result();
            $row = $result->fetch_assoc();
            
            if($row) {
                return new self($row);
            }
        }

        return null;
    }

    /**
     * @param string $email
     * @param string $password
     */
    static function search($criteria = array()) {
        $sql = "SELECT `Movie`.`ID`, `Movie`.`Title`, `Movie`.`Description`, `Movie`.`Release_Year`, `Movie`.`Rental_Duration`, `Movie`.`Rental_Rate`, `Movie`.`Length`, `Movie`.`Replacement_Cost`, `Movie`.`Rating`, `Movie`.`Last_Update`, `Movie`.`Special_Features`, `Movie`.`Fulltext` FROM Movie";
        
        $param_types = "";
        $params = array();
        $conditions = array();
        
        foreach ($criteria as $key => $value) {
            if(empty($value)) {
                continue;
            }
            switch($key) {
                case 'title':
                    array_push($conditions, "`Movie`.`Title` LIKE ?");
                    array_push($params, "%".$value."%");
                    $param_types .= "s";
                    break;

                case 'actor':
                    $sql .= " INNER JOIN Movie_Actor ON `Movie`.`ID` = `Movie_Actor`.`Movie_ID`";
                    $sql .= " INNER JOIN Actor ON `Movie_Actor`.`Actor_ID` = `Actor`.`ID`";
                    array_push($conditions, "`Actor`.`First_Name` LIKE ?");
                    array_push($params, "%" . $value . "%");
                    $param_types .= "s";
                    break;

                case 'category':
                    $sql .= " INNER JOIN Movie_Category ON `Movie`.`ID` = `Movie_Category`.`Movie_ID`";
                    array_push($conditions, "`Movie_Category`.`Category_ID` = ?");
                    array_push($params, $value);
                    $param_types .= "i";
                    break;
            }
        }

        if(count($conditions) > 0) {
            $sql .= " WHERE " . join(" AND ", $conditions);
        }


        $db_conn = Database::getConnection();
        $query = $db_conn->prepare($sql);
        if(count($conditions) > 0) {
            $query->bind_param($param_types, ...$params);
        }
        
        $movies = [];
        if($query->execute()) {
            $result = $query->get_result();
            while($row = $result->fetch_assoc()) {
                $movie = new Movie($row);
                array_push($movies, $movie);
            }
        }

        return $movies;
    }

    /**
     * @param mysqli_stmt $query
     * @return Movie|null
     */
    static function load($query) {
        if($query->execute()) {
            $result = $query->get_result();
            $row = $result->fetch_assoc();
            
            if($row) {
                return new self($row);
            }
        }

        return null;
    }

    function __construct($properties = array()){
        $this->id = $properties['ID'] ?? null;
        $this->title = $properties['Title'] ?? null;
        $this->description = $properties['Description'] ?? null;
        $this->release_year = $properties['Release_Year'] ?? null;
        $this->rental_duration = $properties['Rental_Duration'] ?? null;
        $this->rental_rate = $properties['Rental_Rate'] ?? null;
        $this->length = $properties['Length'] ?? null;
        $this->replacement_cost = $properties['Replacement_Cost'] ?? null;
        $this->rating = $properties['Rating'] ?? null;
        $this->last_update = $properties['Last_Update'] ?? null;
        $this->special_features = $properties['Special_Features'] ?? null;
        $this->full_text = $properties['Fulltext'] ?? null;

        return $this;
    }
}
