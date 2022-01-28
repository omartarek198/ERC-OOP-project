<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commandView</title>
</head>
<body>
    <form action="commandController.php" method="POST">
    <label for="uNames">Please select a user you'd like to change permissions for</label>
            <select id="uNames" name="uNames">
                <option value="nothing">Select a User</option>
                <option value="all">ALL USERS EXCEPT MASTER</option>
    <?php
        include_once "viewUsersClass.php";
        $vu = new viewUsers();
        $vu->listOptions();
    ?>
            </select>  
    <a href="commandController.php"></a>
    <button>CLICK HERE</button>
    </form>
</body>
</html>