<?php
session_start();

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
//echo $_POST['MethodID'];
include_once '../Database.php';
$sql = "SELECT donationmethodoptions.Id ,doptions.Name, doptions.Type FROM donationmethodoptions LEFT JOIN doptions on donationmethodoptions.OptionID = doptions.Id WHERE donationmethodoptions.DmethodID = ?";
$db = new Database();
$link = $db->connectToDB();
if ($stmt = mysqli_prepare($link, $sql)) {
// Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "i", $_POST['MethodID']);

// Attempt to execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        
        $result = mysqli_stmt_get_result($stmt);
    }
                   
    $_SESSION['r'] = $_POST['MethodID'];


    while ($row = mysqli_fetch_array($result)) {
        echo '<form action="SaveToDB.php" method="POST">';
        if ($row['Type'] == "varchar") {
            //echo $row['Type']   ;
            echo "<label>" . $row['Name'] . "</label><br>";
            echo "<input type=text' name='" . $row['Id'] . "' >";
        }
        if ($row['Type'] == "int") {
            //echo $row['Type']   ;
            echo "<label>" . $row['Name'] . "</label><br>";
            echo "<input type='number' name='" . $row['Id'] . "' >";
        }


        if ($row['Type'] == "email") {
            //echo $row['Type']   ;
            echo "<label>" . $row['Name'] . "</label><br>";
            echo "<input type='email' name='" . $row['Id'] . "' >";
        }
        if ($row['Type'] == "date") {
            //echo $row['Type']   ;
            echo "<label>" . $row['Name'] . "</label><br>";
            echo "<input type='date' name='" . $row['Id'] . "' >";
        }
        echo '<br> <br>';


        //echo $row['Name'];
    }
    //echo '<br> <br>';
    echo'<input type="submit"> </form>';
    echo '</form>';
}