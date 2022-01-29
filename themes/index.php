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
    $link = $db->connectToDB();
    ?>
    <head>
        <?php
            $sql = "SELECT * FROM `them` WHERE Id = 26";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            echo $row["ThemHTML"];
            ?>
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