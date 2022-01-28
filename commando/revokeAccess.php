<?php
class revokeAccess implements command{
    private user $uid;
    public function __construct($userid){
        $this->uid = $userid;
    }
    public function execute(){
        //HERE IS WHERE YOU ACCESS DB TO SET ACCESS PERMISSION TO FALSE
    }

    public function undo(){
        //UNDO REVOKING ACCESS
    }
}