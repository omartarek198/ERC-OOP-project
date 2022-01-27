<?php

include_once 'Database.php';   
        include_once 'CreateClass.php';   
        include_once 'EditinDB.php';   
        include_once 'StateContext.php';  
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of StateContext
 *
 * @author Ahmed
 */
class StateContext {
    public $currentstate;
    public $stateok;
    public function __construct()
    {
      
    } 

    public function setState($stateok)
    {
        $this->currentstate = $stateok;
    }
    
    
}

