<?php
class revokeAll implements command{
    private $uid;

    public function __construct($uids){
        $this->uid = array($uids);
    }
    public function execute(){
        foreach($this->uid as $id){

        }
    }
    public function undo(){
        foreach($this->uid as $id){
            
        }
    }
}