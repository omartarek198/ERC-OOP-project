<?php
include_once 'Database.php';
class masterAdmin implements adminPermissions {
    private $uid;
    private $db;
    private $link;
    public function __construct($userid){
        $this->uid = $userid;
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }
    public function grantAccess(){
        $sql = "SELECT * FROM sql_inject where name='get user with id'";
        $result = mysqli_query($this->link, $sql);
        $row = mysqli_fetch_row($result);
        $row[2] .= $this->uid;
        $sql1 = $row[2];
        $result1 = mysqli_query($this->link, $sql1);
        while($row = mysqli_fetch_row($result1)){
            $sql = "SELECT * FROM sql_inject where name='grant one user'";
            $result = mysqli_query($this->link, $sql);
            $row = mysqli_fetch_row($result);
            if ($stmt = mysqli_prepare($this->link, $row[2])) {
                mysqli_stmt_bind_param($stmt, "i", $param_id);
                $param_id = $this->uid;
    
                if (mysqli_stmt_execute($stmt)) {
                    
                    return true;
                } else {
                    return false;
                }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($this->link);
            return false;
        }
    }
    public function revokeAccess(){
        $sql = "SELECT * FROM sql_inject where name='get user with id'";
        $result = mysqli_query($this->link, $sql);
        $row = mysqli_fetch_row($result);
        $row[2] .= $this->uid;
        $sql1 = $row[2];
        $result1 = mysqli_query($this->link, $sql1);
        while($row = mysqli_fetch_row($result1)){
            $sql = "SELECT * FROM sql_inject where name='revoke one user'";
            $result = mysqli_query($this->link, $sql);
            $row = mysqli_fetch_row($result);
            if ($stmt = mysqli_prepare($this->link, $row[2])) {
                mysqli_stmt_bind_param($stmt, "i", $param_id);
                $param_id = $this->uid;
    
                if (mysqli_stmt_execute($stmt)) {
                    
                    return true;
                } else {
                    return false;
                }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($this->link);
            return false;
        }

    }
}

?>