<?php

session_start();
echo $_SESSION['id'];
echo $_POST['i'];
//echo $_POST['DOPtionID'];
//no need to valdiate
include 'Database.php';
$db = new Database();
$link = $db->connectToDB();
$sql = "UPDATE them SET Id=?, ThemHTML=?";

$stmt = mysqli_prepare($link, $sql);
// Bind variables to the prepared statement as parameters

mysqli_stmt_bind_param($stmt, "is", $_SESSION['id'], $_POST['i']);
if (mysqli_stmt_execute($stmt)) {
    // Records updated successfully. Redirect to landing page
    echo 'Done';
    return true;
} else {
    echo 'Faild';
    return false;
}

