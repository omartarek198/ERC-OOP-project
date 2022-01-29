<?php
session_start();
$_SESSION['id']=$_POST['thID'];
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'Database.php';
include 'themModel.php';
$tm = new them();
$result = $tm->readall();

 while ($row = mysqli_fetch_array($result)) {
        if($row['Id']== $_POST['thID'])
        {
            echo $row['Name'];
            echo '<br>';
echo "
<form method='post' action=addtoDB.php>"
;
echo '<textarea name="i" rows="10" cols="10">'.$row['ThemHTML'].'</textarea>';
echo'<input type="submit"> </form>';
            

        }
    }

