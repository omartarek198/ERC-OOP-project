<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        include_once 'img.php';
        include_once 'Realimag.php';
        include_once 'Proxyimg.php';
        $im = new Proxyimg();
        $im->show();
        echo '<br>';
        echo '<br>';
        $im->show();
        // put your code here
        ?>
    </body>