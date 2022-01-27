<?php
include_once 'state.php';
class Context
{
    public $state;

    public function __construct()
    {

    }

    public function display()
    {

    }
    public function changestate($obj)
    {
        $this->state = $obj;
    }
    public function getsystemstate()
    {
        $this->state->echostate();
    }
}