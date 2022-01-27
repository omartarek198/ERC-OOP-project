<?php
include_once 'Database.php';
class CreateClass{

    private $db;

    public function __construct() {

        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function UpdateRecord($x)
    {

        $sql = "UPDATE systemstate SET state =$x WHERE id=0";


        if (mysqli_query($this->link, $sql)) {

            return TRUE;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->link);


            mysqli_close($this->link);
            return false;
        }
    }}