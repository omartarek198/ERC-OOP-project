<?php

class ValidationClass
{
  public  function ValidateName($x)
    {
        if (!preg_match("/^[a-zA-Z-' ]*$/",$x)) {
            return false;
        }
        else{
            echo 'true';
            return true;
        }
        //returns
    }

    public function ValidateEmail($x)
    {

        if (!filter_var($x, FILTER_VALIDATE_EMAIL)) {
            echo 'Email not well formed';
       return false;
        }
        return true;
    }
    public function ValidateNumber($x){
        if (x < 0)
        {
            return false;
        }
        else return true;
    }

    public  function  ValidateDateIsInFuture($x)
    {

        $Today = date("Y/m/d");
        echo $Today;


        $arr = explode("/",$Today);
        $Intarr[0] = (int)$arr[0];
        $Intarr[1] = (int)$arr[1];
        $Intarr[2] = (int)$arr[2];

        $x = explode("-",$x);
        $IntX[0] = (int)$x[0];
        $IntX[1] = (int)$x[1];
        $IntX[2] = (int)$x[2];

        $val = (($IntX[0]-2000 )*365) + ($IntX[1] * 12) + $IntX[2];
        $val2 = (($Intarr[0]-2000 )*365) + ($Intarr[1] * 12) + $Intarr[2];


        if ($val2 > $val)
        {
            return  false;
        }

        return  true;
    }



}