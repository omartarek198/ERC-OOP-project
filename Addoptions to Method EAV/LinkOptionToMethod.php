<?php

echo $_POST['MethodID'];
echo $_POST['DOPtionID'];
//no need to valdiate
include 'Database.php';
$db = new Database();
$link = $db->connectToDB();
$sql = "INSERT INTO donationmethodoptions (DmethodID, OptionID) VALUES (?, ?)";
$stmt = mysqli_prepare($link, $sql);
// Bind variables to the prepared statement as parameters

mysqli_stmt_bind_param($stmt, "ii", $_POST['MethodID'], $_POST['DOPtionID']);
mysqli_stmt_execute($stmt);

