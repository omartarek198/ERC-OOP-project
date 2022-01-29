<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'Database.php';
include 'themModel.php';

echo '<h1> Add Option To Dontion Method </h1>';

$tm = new them();
$result = $tm->readall();
if (mysqli_num_rows($result) > 0) {
    echo '<form action="changeHTML.php" method="POST">
  <label for="browser">Choose The Donation Method</label>
     <select name="thID">';

    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['Id'] . "'> " . $row['Name'] .  "</option>";
    }
    echo '  </select>';
}
echo'<input type="submit"> </form>';

