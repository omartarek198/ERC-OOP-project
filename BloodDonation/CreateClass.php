<?php

include_once 'Database.php';   
        include_once 'CreateClass.php';   
        include_once 'EditinDB.php';   
        include_once 'StateContext.php';  

class CreateClass {

    private $db;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function editRecord($bt, $stock) {
        $sql = "UPDATE bloodstock SET stock=? WHERE bloodtypeID=?";
        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ii", $param_stock, $param_bt);
            
            $param_stock = $stock;
            $param_bt = $bt;

            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }
            $stockk = $stock;
        }

        mysqli_stmt_close($stmt);
        mysqli_close($link);
        return false;
    }
    public function readAll() {

        // Attempt select query execution
        $sql = "SELECT * FROM bloodstock";
        if ($result = mysqli_query($this->link, $sql)) {
            return $result; 
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
            return false;
        }

        // Close connection
        mysqli_close($this->link);
        return false;
    }
    public function readd()
    {
        $sql = "SELECT stock FROM bloodstock where bloodtypeID=1";
        if ($result = mysqli_query($this->link, $sql)) {
            return $result; 
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
            return false;
        }

        // Close connection
        mysqli_close($this->link);
        return false;
    }


}

?>