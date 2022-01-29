<?php
include_once '../Database.php';
$db = new Database();
$link = $db->connectToDB();
$pid = $_POST['lid'];
$name = $_POST['name'];
$sql = "INSERT INTO addresses (addressname, pid) VALUES (?, ?)";
if ($stmt = mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, "ss", $param_name, $param_pid);

    $param_name = $name;
    $param_pid = $pid;

    if (mysqli_stmt_execute($stmt)) {
        echo "<option value=".$pid.">".$name."</option>";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
}


//INSERT INTO table_name (column1, column2, column3, ...)
//VALUES (value1, value2, value3, ...);
?>