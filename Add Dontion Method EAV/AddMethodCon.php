<?php

if (empty($_POST["name"])) {
    $errMsg = "Error! You didn't enter the Name.";
    echo $errMsg;
} else {
    $name = $_POST ["name"];
    if (!preg_match("/^[a-zA-z, ]*$/", $name)) {
        $ErrMsg = "Only alphabets and whitespace are allowed.";
        echo $ErrMsg;
    } else {
        echo 'name accepted <br>';
        echo $name;
        echo '<br>';
        include 'addMethodModel.php';
        $a=new addMethodModel();
        $a->name=$name;
        $a->addtoDb();
        echo '<br> <a href="url">link text</a>';
    }
}

