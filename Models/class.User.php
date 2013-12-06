<?php

/**
 * Description of class
 *
 * @author majdih
 */

class User {

    protected $user_id;
    protected $user_first;
    protected $user_last;
    protected $user_email;
    protected $user_pwd;
    protected $db;

    public function __construct($id, $first, $last, $email, $pwd) {
        $this->user_id = $id;
        $this->user_first = $first;
        $this->user_last = $last;
        $this->user_email = $email;
        $this->user_pwd = $pwd;
        $this->db = new MongoClient();
    }

# FUNCTIONS TO RETRIEVE INFO - DESERIALIZE.

    public static function db_user_by_id($dbc, $id) {
        $query = "SELECT * FROM user WHERE user_id=$id LIMIT 1";
        return User::db_select($dbc, $query);
    }

    public static function db_user_by_name($dbc, $first, $last) {
        $query = "SELECT * FROM user WHERE user_first='$first' AND user_last='$last' LIMIT 1";
        return User::db_select($dbc, $query);
    }

    protected static function db_select($dbc, $query) {
        $result = mysqli_query($dbc, $query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
            return new User($row[0], $row[1], $row[2], $row[3], $row[4]);
        }
    }

# FUNCTIONS TO SAVE INFO - SERIALIZE.

    public function insert($dbc) {
        $query = "INSERT INTO user VALUES (NULL, '$this->user_first', '$this->user_last')";
        $result = mysqli_query($dbc, $query);
    }

    public function update($dbc) {
        $query = "UPDATE user SET user_first='$this->user_first', user_last='$this->user_last' WHERE user_id=$this->id LIMIT 1";
        $result = mysqli_query($dbc, $query);
    }

# GETTER and SETTER FUNCTIONS - DO NOT ALLOW SETTING OF ID

    public function getId() {
        return $this->user_id;
    }

    public function getFirst() {
        return $this->user_first;
    }

    public function getLast() {
        return $this->user_last;
    }

    public function setFirst($first) {
        $this->user_first = $first;
    }

    public function setLast($last) {
        $this->user_last = $last;
    }

# CUSTOM FUNCTIONS

    public function getFullName() {
        return $this->user_first . ' ' . $this->user_last;
    }

    public function getLastFirst() {
        return $this->user_last . ', ' . $this->user_first;
    }

}
?>
