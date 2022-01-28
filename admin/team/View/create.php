

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
                        <p>Grant admin privileges </p>
                        <form action="../Controller/CreateController.php" method="post">
                            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                <label>username</label>
                                <input type="text" name="name" class="form-control" value="">
                                <span class="help-block"></span>
                            </div>

                            </div>
                              <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                <label>access level</label>

                                  <select id="cmbMake" name="alevel"     onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">

                                      <option value="1">Admin</option>
                                      <option value="2">SuperAdmin</option>

                                  </select>
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
