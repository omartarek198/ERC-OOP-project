<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Realimag
 *
 * @author Mohamed Alaa
 */
include_once 'img.php';
include_once './Database.php';

class Realimag implements img {

    public $row = null;
//put your code here
    public $result, $result2;

    function __construct() {
        $this->loaadfromdatabase();
    }

    function loaadfromdatabase() {

        echo 'loaded  from database';
        echo '<br>';
//$id = $_GET['id'];
// do some validation here to ensure id is safe
        $this->Db = new Database();
        $this->link = $this->Db->connectToDB();
//$link = mysql_connect("localhost", "root", "");
//mysql_select_db("demo");
        $sql = "SELECT image FROM images ORDER BY id DESC LIMIT 0, 1";

        $result = mysqli_query($this->link, $sql);
        //header("Content-type: image/png");
        $this->row = mysqli_fetch_array($result);
    }

    public function show() {
        //header("Content-type: image/png");

        echo '<img src="data:image/jpeg;base64,' . base64_encode($this->row['image']) . '"/>';
        //return $this->row['image'];
    }

}
