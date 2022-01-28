<?php
include_once 'adminPermissions.php';
class grantAccess implements command{
    private adminPermissions $mAdmin;
    public function __construct($ma){
        $this->mAdmin = $ma;
    }
    public function execute(){
        $this->mAdmin->grantAccess();
    }

    public function undo(){
        $this->mAdmin->revokeAccess();
    }
}