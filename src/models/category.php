<?php

require_once __ROOT__ . '/lib/db.php';

class Category {
    public $movie_id;
    public $category_id;
    public $last_update;

    public static function get_list() {
        $list = array();

        $db_conn = Database::getConnection();
        $query = $db_conn->prepare("SELECT `ID`, `Name` FROM Category");
        
        if($query->execute()) {
            $result = $query->get_result();
            while($row = $result->fetch_assoc()) {
                $list[$row['ID']] = $row['Name'];
            }
        }

        return $list;
    }
}
