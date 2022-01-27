<?php

session_start();

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include_once '../Database.php';
//echo  $_SESSION['r'];
//  echo '5';
$s = 1;
$result = "";
$sql = "SELECT donationmethodoptions.Id , doptions.Type FROM donationmethodoptions LEFT JOIN doptions on donationmethodoptions.OptionID = doptions.Id WHERE donationmethodoptions.DmethodID = ?";
$db = new Database();
$link = $db->connectToDB();
if ($stmt = mysqli_prepare($link, $sql)) {
// Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "i", $_SESSION['r']);

    if (mysqli_stmt_execute($stmt)) {

        $result = mysqli_stmt_get_result($stmt);
    }
//valate all data befor insert in DB
    while ($row = mysqli_fetch_array($result)) {
//echo is_numeric($_POST["" . $row['Id'] . ""]);


        if ($row['Type'] == "int" && $_POST["" . $row['Id'] . ""] < 0) {
            echo 'not acepted becous value is < 0';
            $s = 0;
            break;
        }
        if ($row['Type'] == "varchar" && !preg_match("/^[a-zA-Z-' ]*$/", $_POST["" . $row['Id'] . ""])) {
            echo 'not acepted becous value has special or num charcter ';
            $s = 0;
            break;
        }
    }
}
if ($s == 1) {
    $db2 = new Database();
    $link2 = $db2->connectToDB();
    echo 'done';
    $sql2 = "SELECT donationmethodoptions.Id , doptions.Type FROM donationmethodoptions LEFT JOIN doptions on donationmethodoptions.OptionID = doptions.Id WHERE donationmethodoptions.DmethodID = ?";

    if ($stmt2 = mysqli_prepare($link2, $sql2)) {
// Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt2, "i", $_SESSION['r']);
            echo 'done';


        if (mysqli_stmt_execute($stmt2)) {

            $result2 = mysqli_stmt_get_result($stmt2);
            echo 'done';
            while ($row = mysqli_fetch_array($result2)) {
                $sql3 = "INSERT INTO donationoptionsvalue (PMOpid, value, Did) VALUES (?, ?, ?)";
                $stmt3 = mysqli_prepare($link, $sql3);
                mysqli_stmt_bind_param($stmt3, "isi", $row['Id'], $_POST["" . $row['Id'] . ""], $s); //we shoud know dontion ID
                mysqli_stmt_execute($stmt3);
                echo 'done';
            }
        }
    }
}

