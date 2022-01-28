<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
<body>
<?php
    include_once 'getData.php';
    include_once 'arrayToXlsxAdapter.php';
    include_once 'xlsxDownload.php';
    include_once 'csvDownload.php';
    include_once 'arrayToCsvAdapter.php';
    $gtD = new getData();
    $pros = $gtD->getCNames();
    $rows = $gtD->getRows();
    $atx = new arrayToXlsx();
    $atc = new arrayToCsv();
    $wrt = $atc->convertData($pros, $rows);
    $sheet = $atx->convertData($pros, $rows);
    $csvF = new csvD($wrt);
    $csvF->downloadCSV();
    $xlsxF = new xlsxD($sheet);
    $xlsxF->downloadXLSX();
echo '<table class="data-table">
        <tr class="data-heading">';
foreach ($pros as $item){
    echo '<td>' . $item . '</td>';
}
echo '</tr>';

foreach($rows as $row){
    echo "<tr>";
    foreach ($pros as $item) {
        echo '<td>' . $row[$item] . '</td>';
    }
    echo '</tr>';
}
echo "</table>";
  
    echo "<button onClick=<?php?>CLICK HERE I DARE YA</button>";
?>
</body>
</html>