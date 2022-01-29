<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="home.css">
    </head>
    <body>
        <br>
        <div class="wrapper col">
            <div class="col-md-3">
                <h1 id="formHeader"> <?php
                    $lan = 2;
                    if (isset($_GET['hello'])) {
                        $lan = 1;
                    }
                    $tword = "login";
                    if ($lan == 1) {
                        include_once 'translationclass.php';
                        $t = new translationclass();
                        $t->word = $tword;
                        $tword = $t->trans();
                    }
                    echo $tword;
                    ?> </h1>
                <hr>
                <form method="post" action="php/login.php">
                    <label ><?php
                        $tword = "username";
                        if ($lan == 1) {
                            $t->word = $tword;
                            $tword = $t->trans();
                        }
                        echo $tword;
                        ?></label>
                    <input type="text" name="username" id="username">
                    <label ><?php
                        $tword = "password";
                        if ($lan == 1) {
                            $t->word = $tword;
                            $tword = $t->trans();
                        }
                        echo $tword;
                        ?></label>
                    <input type="password" name="password" id="password">
                    <button type="submit" name="login" value="Login"> <?php
                        $tword = "login";
                        if ($lan == 1) {
                            $t->word = $tword;
                            $tword = $t->trans();
                        }
                        echo $tword;
                        ?> </button>
                    <br><a href='index.php?hello=true'>عربي</a><br>
                    <a href='index.php'>English</a>

                </form>
            </div>

        </div>
    </body>
</html>
<?php 
