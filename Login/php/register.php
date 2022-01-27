<?php

include_once 'CreateUser.php';
include_once 'User.php';
include_once 'ValidationClass.php';
$v = new ValidationClass();
$creator = new CreateUser();
if ($_POST)
{
    $username = $_POST["registerUsername"];
    $name = $_POST["registerName"];
    $password =$_POST["registerPassword"];
    $email = $_POST["registerEmail"];
    $confirmPassword =$_POST["registerConfirmPassword"];
    $date = $_POST["registerDate"];
    $pNo = $_POST["registerPhoneNo"];
    if(!$v->ValidateAge($date)){
        echo "<script type='text/javascript'>alert('TOO YOUNG OR TOO OLD. AT LEAST 12 Y.O OR AT MOST 100');</script>";
        echo '<script>location.href="../register.html";</script>';
    } else if(!$v->ValidateEmail($email)){
        echo "<script type='text/javascript'>alert('please enter a valid email');</script>";
        echo '<script>location.href="../register.html";</script>';
    }else if(!$v->ValidateNumber($pNo)){
        echo "<script type='text/javascript'>alert('PHONE TOO SHORT');</script>";
        echo '<script>location.href="../register.html";</script>';
    }else if($password != $confirmPassword){
        echo "<script type='text/javascript'>alert('PASSWORD NO MATCH');</script>";
        echo '<script>location.href="../register.html";</script>';
    }else if(!$v->ValidateName($name)){
        echo "<script type='text/javascript'>alert('PLEASE ENTER A HUMAN NAME');</script>";
        echo '<script>location.href="../register.html";</script>';
    }else if (!$creator->IsUNtaken($username)){
        $user = new User($_POST["registerName"], $_POST["registerDate"], $_POST["registerEmail"], $_POST["registerUsername"], $_POST["registerPassword"], $_POST["registerPhoneNo"]);
        $user->register();
        echo '<script>location.href="../choose.html";</script>';
    }
    else{
        echo "<script type='text/javascript'>alert('CHOOSE ANOTHER USERNAME PLEASE THIS ONE IS TAKEN');</script>";
        echo '<script>location.href="../register.html";</script>';
    }
}
?>