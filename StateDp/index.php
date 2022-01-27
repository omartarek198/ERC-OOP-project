<?php
include_once  "Context.php";
include_once "Onstate.php";
include "systemstate.php";
include_once "state.php";
include_once "Offstate.php";

$context = new Context();
$state = new Onstate($context);
$systemstate = new systemstate($context);
$systemstate->turnsystemon();

$systemstate->turnsystemoff();

if(isset($_POST['button1'])) {
    //online
    $systemstate->turnsystemon();
}
if(isset($_POST['button2'])) {
    $systemstate->turnsystemoff();
}

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Change system state">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/default-logo.png"
        }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
</head>


<section class="skrollable u-clearfix u-grey-10 u-section-1" id="carousel_4f49">
    <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-sheet-1">
        <div class="u-align-center u-container-style u-group u-white u-group-1">
            <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-top-xs u-container-layout-1">
                <?php $context->getsystemstate();?>
                <h2 class="u-text u-text-body-color u-text-default u-text-1">Change system state</h2>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <form method="post">
                    <input type="submit" name="button1"
                           value="Online"/>

                    <input type="submit" name="button2"
                           value="Offline"/>
                </form>
                <div class="u-align-left u-expanded-width-xs u-form u-form-1">
                    <form action="#" method="POST" class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">


                    </form>
                </div>
            </div>




        </div>
    </div>
</section>


</body>
</html>
