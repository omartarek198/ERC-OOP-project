<?php
class invoker{
    private command $com;
    public function __construct($command){
        $this->com = $command;
    }

    public function grant(){
        $this->com->execute();
    }
    public function revoke(){
        $this->com->undo();
    }
}