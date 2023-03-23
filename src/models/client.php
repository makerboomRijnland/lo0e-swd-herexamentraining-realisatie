<?php

require_once __ROOT__ . '/lib/db.php';

class Client {
    public $id;
    public $email;
    public $first_name;
    public $last_name;
    public $active;
    protected $password;

    /**
     * @param int $id
     */
    static function get($id) {
        $db_conn = Database::getConnection();
        $query = $db_conn->prepare("SELECT ID, Email, Password, First_name, Last_name, Active FROM Client WHERE ID=?");
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
    static function login($email, $password) {
        $db_conn = Database::getConnection();
        $query = $db_conn->prepare("SELECT ID, Email, Password, First_name, Last_name, Active FROM Client WHERE email=?");
        $query->bind_param("s", $email);
        $user = self::load($query);

        if(!is_null($user) && $user->check_password($password)) {
            return $user;
        }

        return null;
    }

    /**
     * @param mysqli_stmt $query
     * @return Client|null
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
        $this->email = $properties['Email'] ?? null;
        $this->password = $properties['Password'] ?? null;
        $this->first_name = $properties['First_name'] ?? null;
        $this->last_name = $properties['Last_name'] ?? null;
        $this->active = $properties['Active'] ?? null;

        return $this;
    }

    /**
     * @param string $password
     * @return bool
     */
    function check_password($password) {
        return password_verify($password, $this->password);
    }

}
