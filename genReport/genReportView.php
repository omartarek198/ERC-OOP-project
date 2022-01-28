<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>genReport</title>
</head>
<body>
    <form action="genReportController.php" method="POST">
    <label for="tNames">Please Select A Table You'd Like to display</label>
            <select id="tNames" name="tNames">
                <option value="nothing">Select a Table</option>
    <?php
            include_once 'viewTableNames.php';
            $vtn = new viewTables();
            $vtn->getTableNames();
    ?>
       
                

            </select>  
    <a href="genReportController.php"></a>
    <button>CLICK HERE</button>
    </form>
</body>
</html>
