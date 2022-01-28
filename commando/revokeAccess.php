<?php
include_once 'adminPermissions.php';
class revokeAccess implements command{
    private adminPermissions $mAdmin;
    public function __construct($ma){
        $this->mAdmin = $ma;
    }
    public function execute(){
        $this->mAdmin->revokeAccess();
    }

    public function undo(){
        $this->mAdmin->grantAccess();
    }
}