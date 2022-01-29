<?php
include_once 'getData.php';
include_once 'arrayToXlsxAdapter.php';
include_once 'xlsxDownload.php';
include_once 'csvDownload.php';
include_once 'arrayToCsvAdapter.php';

// include_once 'viewTableNames.php';
//             $vtn = new viewTables();
//             $vtn->getTableNames();
//             $vtn->setRe($_POST['ff']);


$rec = explode(",", $_POST['act']);
$gtD = new getData($rec[1]);
$pros = $gtD->getCNames();
$rows = $gtD->getRows();

$atx = new arrayToXlsx();
$atc = new arrayToCsv();
$wrt = $atc->convertData($pros, $rows);
$sheet = $atx->convertData($pros, $rows);
$type = $rec[0];
$csvF = new csvD($wrt);
$xlsxF = new xlsxD($sheet);
if($type == "csv"){

     $csvF->downloadCSV();
    }else if ($type == "xlsx"){

     $xlsxF->downloadXLSX();
    } else {

    }
?>