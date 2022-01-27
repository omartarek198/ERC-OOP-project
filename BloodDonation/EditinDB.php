<?php

include_once 'Database.php';

class EditinDb {

    private $db;
    public $eh;

    public function __construct() {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

}
