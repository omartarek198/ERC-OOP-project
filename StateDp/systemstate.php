<?php
include_once "Context.php";
include_once "Onstate.php";
include_once "Offstate.php";
class systemstate extends state
{
    public function echostate()
    {

    }
    public function turnsystemoff()
    {
        $this->context->changestate(new Offstate($this->context));
    }

    public function turnsystemon()
    {
            $this->context->changestate(new Onstate($this->context  ));
    }


}