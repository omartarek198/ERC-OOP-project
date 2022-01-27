<?php

include_once 'CreateUser.php';

$creator = new CreateUser();
if ($_POST)
{
    $unm = $_POST["registerUsername"];
    if (!$creator->IsUNtaken(unm))
    {
        echo "tmm";
    }
    else{
        echo "not tmm";
    }
}