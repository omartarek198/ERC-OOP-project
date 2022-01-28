<?php 
        include_once 'Database.php';
class viewTables{
        private $db;
        private $link;
        public function __construct(){
          $this->db = new Database();
            $this->link = $this->db->connectToDB();
        }
        public function getTableNames(){
        $sql = "SHOW TABLES FROM oop";
        $result = mysqli_query($this->link, $sql);
        if(!$result){
            echo 'MySQL Error: ' . mysqli_error($this->link);
            exit;
        }
        while($row = mysqli_fetch_row($result)){
            echo "<option value=".$row[0].">".$row[0]."</option>";
        }
        }
}

?>