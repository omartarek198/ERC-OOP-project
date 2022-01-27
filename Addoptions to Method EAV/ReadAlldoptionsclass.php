<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReadAllMethodscalss
 *
 * @author Mohamed Alaa
 */
include_once 'Database.php';

class ReadAlloptionsClass {

    //put your code here



    public function readall() {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
        $sql = "SELECT * FROM doptions";
        if ($result = mysqli_query($this->link, $sql)) {
            //echo 's';
            return $result;
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
            return false;
        }
    }

}
