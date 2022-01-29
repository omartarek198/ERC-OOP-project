<?php

include_once 'createview.php';
include_once 'make.php';

class FacMaker {
    public $create;
    public $validate;
    public function __construct()
    {
        $this->create = new createview();
        $this->validate = new validateok();
    }
    public function createview()
    {
        $this->create->tomake();
    }
    public function validatee()
    {
        $this->validate->tomake();
    }

}
