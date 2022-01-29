<?php
include_once '../Database.php';
if ( isset( $_POST['cid'] ) ) {
    $pid = $_POST['cid'];
    $db = new Database();
    $link = $db->connectToDB();
    // $sql2 = "SELECT * from addresses where adressname=".$term_id;
    // $re = mysqli_query($link, $sql2);
    // $rr = mysqli_fetch_row($re);
    // do database query
    $sql = "SELECT * FROM addresses where pid='$pid'";
    $result = mysqli_query($link, $sql);
    echo '<option value="nothing">Please Select</option>';
    echo '<option value="add another">add another</option>';
    while($row = mysqli_fetch_row($result)){
        echo "<option value=".$row[0].">".$row[1]."</option>";
    }
}
?>