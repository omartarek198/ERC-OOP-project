<?php

include_once 'databaseConfig.php';

class User {
    private $name;
    private $usertypeid;
    private $dob;
    private $email;
    private $username;
    private $password;
    private $phone;
    public $database;
    public function __construct($name, $dob, $email, $username, $password, $pno) {
        $this->name = $name;
        $this->usertypeid = 2;
        $this->dob = $dob;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->phone = $pno;
    }
 

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }
    
    function setUserTypeID($uti) {
        $this->usertypeid = $uti;
    }



    function register() {
        $this->connectToDatabase();
        $sql = "INSERT INTO user (Name, usertypeid, Dob, email, username, password, phoneno)"
                . " VALUES ('" . $this->name . "' , '" . $this->usertypeid  . "' , '" . $this->dob  . "' , '" . $this->email  . "' , '" . $this->username  . "' , '" . sha1($this->password)  . "' , '" . $this->phone  . "')";
        return $this->database->query($sql);
    }

    function login($user) {
        $this->connectToDatabase();
        $sql = "select * from user where username='" . $user->getUsername() . "' and password='" . sha1($user->getPassword()) . "'";
        echo $sql;
        $res = $this->database->query($sql);
        if ($res->num_rows > 0) {
            return true;
        } else {
            return FALSE;
        }
    }

    function connectToDatabase() {
        global $link;
        $this->database = $link;
        return $this->database;
    }

}
