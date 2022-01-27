<?php

abstract class state
{
public $context;
function __construct($obj)
{
$this->context = $obj;
}
abstract function echostate();
}