<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of translationclass
 *
 * @author Mohamed Alaa
 */
class translationclass {

    //put your code here
    public $word;

    function trans() {
        include_once 'Database.php';
        $db = new Database();
        $link = $db->connectToDB();
        //$s = 3;
//        $sql = "SELECT * FROM `word` WHERE ID =".$s;
        //echo $this->word;
        $sql = "SELECT * FROM translation  LEFT JOIN trans_details on trans_details.transid = translation.ID LEFT JOIN word on word.ID=trans_details.transwordid WHERE trans_name = '$this->word'";
//        $stmt = mysqli_prepare($link, $sql);
//        $s=3;
//        mysqli_stmt_bind_param($stmt, "i", $s);
//        mysqli_stmt_execute($stmt);
//        $result = mysqli_stmt_get_result($stmt);
        $result = mysqli_query($link, $sql);
        //echo mysqli_num_rows($result);
        while ($row = mysqli_fetch_row($result)) {
            //echo $row[9];
            return $row[9];
        }
//        $row = mysqli_fetch_array($result);
    }

}
