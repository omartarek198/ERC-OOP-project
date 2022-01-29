<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control</title>
</head>
<body>
    <?php
        include_once 'invokerClass.php';
        include_once 'adminPermissions.php';
        include_once 'revokeAccess.php';
        include_once 'grantAccess.php';
        include_once 'masterAdmin.php';
        $id = $_POST['uNames'];
        $ap = new masterAdmin($id); 
        $acc = new grantAccess($ap);
        $acc->execute();

    ?>
</body>
</html>