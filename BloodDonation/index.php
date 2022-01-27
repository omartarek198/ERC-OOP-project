
<?php
$executing;

include_once 'Database.php';
include_once 'CreateClass.php';
include_once 'EditinDB.php';
include_once 'StateContext.php';
?>
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            background-image: url("2.png");
        }
        .wrapper{
            background-color: white;
            opacity: 0.8;
            width: 500px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 >Donate Blood</h2>
                    </div>
                    <p>Please fill this form to apply for our blood donation programme.</p>
                    <form action="./ReadAllController.php" method = "POST">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="name2">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group <?php echo (!empty($desc_err)) ? 'has-error' : ''; ?>">
                            <p>Please select your favorite Web language:</p>
                                                             <input type="radio" id="Type_A" name="bloodtype" value="TYPEA">
                              <label for="typea">A</label><br>
                                                             <input type="radio" id="Type_B" name="bloodtype" value="TYPEB">
                                                             <label for="typeb">B</label><br>
                              <input type="radio" id="Type_AB" name="bloodtype" value="TYPEAB">
                            <label for="typeab">AB</label><br>
                            <input type="radio" id="Type_O" name="bloodtype" value="TYPEO">
                            <label for="typeo">O</label>

                            <br>  

                        </div>
                        <input type="submit" class="btn btn-danger" value="Submit">
                        <a href="../index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>

        <?php
        
   
