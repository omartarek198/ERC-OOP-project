<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include_once '../Addoptions to Method EAV/ReadAllMethodscalss.php';
//get Methods from DB
$read = new ReadAllMethodscalss();
$result = $read->readall();


if (mysqli_num_rows($result) > 0) {
    echo '<form action="MethodOptions.php" method="POST">
  <label for="browser">Choose The Donation Method</label>
     <select name="MethodID">';

    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['Id'] . "'> " . $row['Name'] . "</option>";
    }
    echo '  </select>';
    echo '<bt>';
    echo'<input type="submit"> </form>';
}

