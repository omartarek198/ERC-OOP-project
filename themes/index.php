<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<!DOCTYPE html>
<html>
    <?php
    include './Database.php';
    $db = new Database();
    $link=$db->connectToDB();
    ?>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
            }

            html {
                box-sizing: border-box;
            }

            *, *:before, *:after {
                box-sizing: inherit;
            }

            .column {
                float: left;
                width: 33.3%;
                margin-bottom: 16px;
                padding: 0 8px;
            }

            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                margin: 8px;
            }

            .about-section {
                padding: 50px;
                text-align: center;
                background-color: #474e5d;
                color: white;
            }

            .container {
                padding: 0 16px;
            }

            .container::after, .row::after {
                content: "";
                clear: both;
                display: table;
            }

            .title {
                color: grey;
            }

            .button {
                border: none;
                outline: 0;
                display: inline-block;
                padding: 8px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
            }

            .button:hover {
                background-color: #555;
            }

            @media screen and (max-width: 650px) {
                .column {
                    width: 100%;
                    display: block;
                }
            }
        </style>
    </head>
    <body>

        <div class="about-section">
            <?php
            $sql = "SELECT * FROM `them` WHERE Id = 11";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            echo $row["ThemHTML"];
            ?>
             <?php
            $sql = "SELECT * FROM `them` WHERE Id = 12";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            echo $row["ThemHTML"];
            ?>
            <?php
           $sql = "SELECT * FROM `them` WHERE Id = 13";
           $result = mysqli_query($link, $sql);
           $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
           echo $row["ThemHTML"];
           ?>


        </div>

        <h2 style="text-align:center">Our Team</h2>
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="container">
                      <?php
                     $sql = "SELECT * FROM `them` WHERE Id = 15";
                     $result = mysqli_query($link, $sql);
                     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                     echo $row["ThemHTML"];
                     ?>
                      <?php
                     $sql = "SELECT * FROM `them` WHERE Id = 14";
                     $result = mysqli_query($link, $sql);
                     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                     echo $row["ThemHTML"];
                     ?>

                     <?php
                    $sql = "SELECT * FROM `them` WHERE Id = 16";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    echo $row["ThemHTML"];
                    ?>
                    <?php
                   $sql = "SELECT * FROM `them` WHERE Id = 17";
                   $result = mysqli_query($link, $sql);
                   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                   echo $row["ThemHTML"];
                   ?>

                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                      <?php
                     $sql = "SELECT * FROM `them` WHERE Id = 18";
                     $result = mysqli_query($link, $sql);
                     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                     echo $row["ThemHTML"];
                     ?>
                     <?php
                    $sql = "SELECT * FROM `them` WHERE Id = 19";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    echo $row["ThemHTML"];
                    ?>
                    <?php
                   $sql = "SELECT * FROM `them` WHERE Id = 20";
                   $result = mysqli_query($link, $sql);
                   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                   echo $row["ThemHTML"];
                   ?>
                   <?php
                  $sql = "SELECT * FROM `them` WHERE Id = 21";
                  $result = mysqli_query($link, $sql);
                  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                  echo $row["ThemHTML"];
                  ?>

                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                      <?php
                     $sql = "SELECT * FROM `them` WHERE Id = 22";
                     $result = mysqli_query($link, $sql);
                     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                     echo $row["ThemHTML"];
                     ?>

                     <?php
                    $sql = "SELECT * FROM `them` WHERE Id = 23";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    echo $row["ThemHTML"];
                    ?>
                    <?php
                   $sql = "SELECT * FROM `them` WHERE Id = 24";
                   $result = mysqli_query($link, $sql);
                   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                   echo $row["ThemHTML"];
                   ?>
                   <?php
                  $sql = "SELECT * FROM `them` WHERE Id = 25";
                  $result = mysqli_query($link, $sql);
                  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                  echo $row["ThemHTML"];
                  ?>
                    </div>
                </div>
            </div>
        </div>



        <?php
// put your code here
        ?>
    </body>
</html>
