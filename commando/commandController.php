<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control</title>
</head>

<body>

    <form action="doAction.php" method="POST">
        <select name="act" id="act">
    <option  value="grantAccess,<?php echo $_POST['uNames'] ?>">grantAccess</option>
    <option  value="revokeAccess,<?php echo $_POST['uNames'] ?>">revokeAccess</option>
    </select>
    <a href="doAction.php"></a>
    <button>Do Action</button>
    </form>
</body>
</html>