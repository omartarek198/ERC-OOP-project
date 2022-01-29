

<!DOCTYPE html>
<html lang="en">
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
                            <h2>Create Record</h2>
                        </div>
                        <p>Please fill this form and submit to add Volunteer record to the database.</p>
                        <form action="../Controller/CreateController.php" method="post">

                            <label >Name</label>
                            <input type="text" name="registerName" id="registerName" required>
                            <label>Date Of Birth</label>
                            <input type="date" name="registerDate" id="registerDate" required>
                            <label >Email</label>
                            <input type="text" name="registerEmail" id="registerEmail" required>
                            <label >Username</label>
                            <input type="text" name="registerUsername" id="registerUsername" required>
                            <label >Password</label>
                            <input type="password" name="registerPassword" id="registerPassword" required>
                            <label >Confirm Password</label>
                            <input type="password" name="registerConfirmPassword" id="registerConfrimPassword" required>
                            <label >Phone Number</label>
                            <input type="text" name="registerPhoneNo" id="registerPhoneNo" required>

                            <div class="form-group <?php echo (!empty($hours_err)) ? 'has-error' : ''; ?>">
                                <label>Hours</label>
                                <input type="text" name="hours" class="form-control" value="">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                                <label>Address</label>
                                <textarea name="address" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group <?php echo (!empty($compensation_err)) ? 'has-error' : ''; ?>">
                                <label>Compensation</label>
                                <input type="text" name="compensation" class="form-control" value="">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group <?php echo (!empty($missionid_err)) ? 'has-error' : ''; ?>">
                                <label>missionid</label>
                                <input type="text" name="missionid" class="form-control" value="">
                                <span class="help-block"></span>
                            </div>
                            <input type="submit" class="btn btn-danger" value="Submit">
                            <a href="../index.php" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>
