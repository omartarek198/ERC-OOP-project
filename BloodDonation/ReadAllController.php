
<?php
include './CreateClass.php';
echo $_POST['bloodtype'];
$type1 = $_POST['bloodtype'];
echo($type1);
$read = new CreateClass();
$result = $read->readd();

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_array($result)) {

   
        
        $dbb = new CreateClass();
        $dbb->editRecord("1", $row['stock']+1);
        echo("<br>");

    }

    // Free result set
    mysqli_free_result($result);


} else {
    echo "<p class='lead'><em>No records were found.</em></p>";

}
