<?php
include_once 'Database.php';
class viewUsers{
    private $db;
    private $link;
    public function __construct(){
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function listOptions(){
        $sql = "SELECT * FROM sql_inject where name='get all users'";
        $result = mysqli_query($this->link, $sql);
        $row = mysqli_fetch_row($result);
        $sql1 = $row[2];
        $result1 = mysqli_query($this->link, $sql1);
        while($row = mysqli_fetch_row($result1)){
            echo "<option value=".$row[0].">".$row[1]."</option>";
        }
    }
}