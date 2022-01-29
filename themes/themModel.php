<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of them
 *
 * @author Mohamed Alaa
 */
class them {
    //put your code here
    public $id;
    public function readall()
    {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
        $sql = "SELECT * FROM them";
        if ($result = mysqli_query($this->link, $sql)) {
            //echo 's';
            return $result;
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
            return false;
        }
    }

}

