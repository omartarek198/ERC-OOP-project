<?php
class Database {

    private $server = "localhost";
    private $username = "root";
    private $password = "";
<<<<<<< HEAD
    private $dbname = "erc3";
=======
    private $dbname = "oop";
>>>>>>> 6009ba81e83f41823a6821bdfb43a5e97431306f

    public function connectToDB() {
        $link = mysqli_connect($this->server, $this->username, $this->password, $this->dbname);
        if ($link)
            return $link;
        else {
            die("ERROR: Could not connect. " . mysqli_connect_error());

            return false;
        }
    }

}
