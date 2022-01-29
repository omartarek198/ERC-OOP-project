<?php
     include_once 'invokerClass.php';
     include_once 'adminPermissions.php';
     include_once 'revokeAccess.php';
     include_once 'grantAccess.php';
     include_once 'masterAdmin.php';
     $id = explode(",",$_POST['act']);
     $ap = new masterAdmin($id[1]);
     if($id[0] == "grantAccess"){
        $acc = new grantAccess($ap);
     }else if ($id[0] == "revokeAccess"){
        $acc = new revokeAccess($ap);
     }

     $acc->execute();

?>