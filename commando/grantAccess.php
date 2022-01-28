<?php
class grantAccess implements command{
    private user $uid;
    public function __construct($userid){
        $this->uid = $userid;
    }
    public function execute(){
        //HERE IS WHERE YOU ACCESS THE DB TO SET PERMSSIONS TO TRUE
    }

    public function undo(){
        //UNDO GRANTING ACCESS
    }
}