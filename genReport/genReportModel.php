<?php
include_once 'Database.php';
class readTable{
private $re;
private $db;
private $link;
    public function __construct(){
        $this->re = $_POST['tNames'];
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }
    public function dispTable(){
        $sql = "SELECT * FROM " .$this->re;
        if($result = mysqli_query($this->link,$sql)){
            return $result;
        }else {
            echo"AN ERROR HAS OCCURED" .mysqli_error($this->link);
            return false;
        }
    }
}
?>