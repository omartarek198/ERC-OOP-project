<?php
include_once('make.php');
include_once('FacMaker.php');
include_once('Database.php');
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of createview
 *
 * @author Ahmed
 */
class createview implements make{
    //put your code here
    private $db;
    public $stockk;
    public $x;
    public function __construct() {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }
    public function tomake() {
        $stockk;
        $sql = "SELECT * FROM bloodstock ;";
        $sql2 = $sql;
        $result = mysqli_query($this->link, $sql);
         while($row = mysqli_fetch_array($result)) {  
            $stockk =$stockk + $row['stock'];
            $i=$row['id'];
            $i=$i+1;
            }
            echo $stockk;
            $this->calc($this->stockk);
           }
    
    
    public function calc(&$var)
    {
        $z= $var;
        return $z;
    }
   
}

class validateok implements make{
    public $m;
    public function tomake() {
       
        $y = new createview();
        $m = $y->calc($a);
        if($m<250)
        {
            echo $m;
            echo"please don't accept further donations";
        }
        ELSE
        {
            echo $m;
            echo"you shall recieve more donations";
        }
    }

}