<?php
include_once 'View.php';
include_once 'ReadRequest.php';

$reader = new ReadRequest();
$viewer = new View();
$res = $reader->readfinancreq();
$viewer->DisplayFin($res);
$viewer->DisplayBreakLine();
$viewer->DisplayMeal($reader->readmealreqs());
