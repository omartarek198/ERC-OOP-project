<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'ReadAllMethodscalss.php';
include_once 'ReadAlldoptionsclass.php';
echo '<h1> Add Option To Dontion Method </h1>';
//get Methods from DB
$read = new ReadAllMethodscalss();
$result = $read->readall();
$read2 = new ReadAlloptionsClass();
//echo 'r <bt>';
$result2 = $read2->readall();

if (mysqli_num_rows($result) > 0) {
    echo '<form action="LinkOptionToMethod.php" method="POST">
  <label for="browser">Choose The Donation Method</label>
     <select name="MethodID">';

    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['Id'] . "'> " . $row['Name'] . "</option>";
    }
    echo '  </select>';
}
echo '<br> <br> <br>';
if (mysqli_num_rows($result2) > 0) {
    echo '<label for="browser">Choose The Option</label>
     <select name="DOPtionID">';

    while ($row = mysqli_fetch_array($result2)) {
        echo "<option value='" . $row['Id'] . "'> " . $row['Name'] .  " (". $row['Type'] .  ") </option>";
    }
    echo '  </select>';
}
echo '<br> <br>';
echo'<input type="submit"> </form>';

