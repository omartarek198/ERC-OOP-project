<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addMethodModel
 *
 * @author Mohamed Alaa
 */
include_once 'Database.php';

class addMethodModel {

//put your code here
    public $name = "";

    public function addtoDb() {
        if ($name = "") {
            echo 'Add name first <br>';
            return false;
        }
        echo 'add fun';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
        $sql = "INSERT INTO donationmethod (Name) VALUES (?)";
        $stmt = mysqli_prepare($this->link, $sql);
        mysqli_stmt_bind_param($stmt, "s", $this->name);
        mysqli_stmt_execute($stmt);
    }

}
