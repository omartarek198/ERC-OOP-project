<?php
include_once  "Database.php";
class CreateUser
{



    private $db;

    public function __construct() {

        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

public function IsUNtaken($x)
{
    $sql =      "SELECT * FROM user WHERE name = '$x' ";
    if($result = mysqli_query($this->link, $sql)){
        if(mysqli_num_rows($result) > 0) {
            return true;
        }
        return false;


    }
}

}