<?php

$name = $access =$pwd = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name =  trim($_POST["name"]);

    $access =  trim($_POST["alevel"]);
    echo $access;


  

    

  

 

 
        include_once '../Model/CreateClass.php';
        $creator = new CreateClass();

        if ($creator->insertRecord($name, $access))  {
            header("location: ../index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    

}
?>