<?php

abstract class Model {
    /**
     * @param mysqli_stmt $query
     * @return Model|null
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
        foreach ($properties as $key => $value) {
            if(isset($this->$key)) {
                $this->$key = $value;
            }
        }
        return $this;
    }
}