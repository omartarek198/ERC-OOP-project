<?php
include_once 'Database.php';
if ($_POST) {
    if (isset($_POST['login']) && $_POST['login'] == "Login") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        include_once 'databaseConfig.php';

        $db = new Database();
    $link = $db->connectToDB();

        $conn = $db->conn;
        $sql = "select * from user where username='" . $username . "' and password='" . sha1($password). "'";
        $res = mysqli_query($link, $sql);

        if ($res->num_rows > 0) {
            $row = mysqli_fetch_assoc($res);
            if ($row["usertypeid"] == 2)
            {
                    echo 'user';
                    $sql = "select * from systemstate where id = 0";
                      $res = mysqli_query($link, $sql);
                      $row = mysqli_fetch_assoc($res);
                      if ($row["state"] == 0)
                      {
                          echo  'sys off';
                      }
                      if ($row["state"] == 1)
                      {
                          echo '<script>location.href="../../donation type view/donation_view.html";</script>';
                      }
            }
            else
            {
                echo 'admin';
                echo '<script>location.href="../../admin/AdminIndex.php";</script>';
            }
            echo'<script>alert("user found")</script>';


        }
        else {

        }
    }
} 

