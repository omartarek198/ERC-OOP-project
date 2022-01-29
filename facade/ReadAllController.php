
<?php
include './CreateClass.php';
$type1 = $_POST['bloodtype'];
echo $type1;
$read = new CreateClass();
$result = $read->readd();
$val1= $read->read1();
$val2= $read->read2();
$val3= $read->read3();
$val4= $read->read4();
       

           
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_array($result)) {


        if($type1=="TYPEA")
        {
        $val = mysqli_fetch_array($val1);
        $dbb = new CreateClass();
         $dbb->editRecord("1", $val['stock']+1);
        break;
        }
        if($type1=="TYPEB")
        {
            $val = mysqli_fetch_array($val2);
        $dbb = new CreateClass();
        $dbb->editRecord("2", $val['stock']+1);
        break;
        }
        if($type1=="TYPEAB")
        {
           $val = mysqli_fetch_array($val3);
        $dbb = new CreateClass();
        $dbb->editRecord("3", $val['stock']+1);
        break;
        }
        if($type1=="TYPEO")
        {
         $val = mysqli_fetch_array($val4);   
        $dbb = new CreateClass();
        $dbb->editRecord("4", $val['stock']+1);
        break;
        }
    }

    // Free result set



} else {
    echo "<p class='lead'><em>No records were found.</em></p>";

}