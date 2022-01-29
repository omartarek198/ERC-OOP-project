<?php

include_once 'Database.php';

class CreateClass {

    private $db;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function insertRecord($name, $email, $phonenumber, $hours, $compensation, $missionid,$username,$password,$dob,) {
        echo 'in';
        $sql = "INSERT INTO user (name, email, phonenumber, hours, compensation, missionid) VALUES (?, ?, ?, ?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssddsdd", $param_name, $param_email, $param_phonenumber, $param_hours, $param_address, $param_compensation, $param_missionid);

            $param_name = $name;
            $param_email = $email;
            $param_phonenumber = $phonenumber;
            $param_hours = $hours;

            $param_compensation = $compensation;
            $param_missionid = $missionid;

            if (mysqli_stmt_execute($stmt)) {
                echo '<br>';
                echo 'done';
                return true;
            } else {
                echo '<br>';
                echo 'error';
                return false;
            }
        }
        echo 'outside if';

        mysqli_stmt_close($stmt);
        mysqli_close($this->link);
        return false;
    }

}
