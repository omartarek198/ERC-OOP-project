<?php

include_once 'Database.php';

class CreateClass {

    private $db;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function insertRecord($name,$acess) {

        $sql = "select * from user where username='$name'";
        $res = mysqli_query($this->link, $sql);

        if ($res->num_rows > 0) {
            $row = mysqli_fetch_assoc($res);
            $id = $row["id"];
            $sql2 = "Update user Set usertypeid = 1 WHERE id =$id";
            mysqli_query($this->link, $sql2);
            $sql = "INSERT INTO admins (userid,accesslevel) VALUES ($id,$acess)";

            if (mysqli_query($this->link, $sql)) {


            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->link);




            }
        }
        else{
            echo 'invalid username';
        }
        echo 'outside if';


        mysqli_close($this->link);
        return false;
    }

}
