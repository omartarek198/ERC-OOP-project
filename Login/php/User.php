<?php

include_once 'databaseConfig.php';

class User
{
    private $name;
    private $usertypeid;
    private $dob;
    private $email;
    private $username;
    private $password;
    private $phone;
    private $address;
    public $database;
    public $sql;
    public $link;

    public function __construct($name, $dob, $email, $username, $password, $pno, $addressid)
    {
        $this->name = $name;
        $this->usertypeid = 2;
        $this->dob = $dob;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->phone = $pno;
        $this->address = $addressid;
    }


    function getUsername()
    {
        return $this->username;
    }

    function getPassword()
    {
        return $this->password;
    }

    function setUserTypeID($uti)
    {
        $this->usertypeid = $uti;
    }


    function register()
    {
        $this->sql = "INSERT INTO user (Name, usertypeid, Dob, email, username, password, phoneno, addressid)"
            . " VALUES ('" . $this->name . "' , '" . $this->usertypeid . "' , '" . $this->dob . "' , '" . $this->email . "' , '" . $this->username . "' , '" . sha1($this->password) . "' , '" . $this->phone . "' , '" . $this->address . "')";


        $this->connectToDatabase();
    }

    function login($user)
    {
        $db = new Database();
        $this->link = $db->connectToDB();

        $sql = "select * from user where username='" . $user->getUsername() . "' and password='" . sha1($user->getPassword()) . "'";

        echo $sql;
        $res = $this->database->query($sql);
        if ($res->num_rows > 0) {
            return true;
        } else {
            return FALSE;
        }
    }

    function connectToDatabase()
    {
        $db = new Database();
        $this->link = $db->connectToDB();

        echo $this->sql;

        if (mysqli_query($this->link, $this->sql)) {

            return TRUE;
        } else {
            echo "Error: " . $this->sql . "<br>" . mysqli_error($this->link);


            mysqli_close($this->link);
            return false;
        }



    }
}