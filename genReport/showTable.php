<?php
include_once 'getData.php';
include_once 'arrayToXlsxAdapter.php';
include_once 'xlsxDownload.php';
include_once 'csvDownload.php';
include_once 'arrayToCsvAdapter.php';
class showing{

    private $gtD;
    private $pros;
    private $rows;
    private $atx;
    private $atc;
    private $wrt;
    private $sheet;
    // private $type;
    private $csvF;
    private $xlsxF;
    public function __construct($t){
        // $this->type = $_POST['type'];
        $this->gtD = new getData($t);
    $this->pros = $this->gtD->getCNames();
    $this->rows = $this->gtD->getRows();
    $this->atx = new arrayToXlsx();
    $this->atc = new arrayToCsv();
    $this->wrt = $this->atc->convertData($this->pros, $this->rows);
    $this->sheet = $this->atx->convertData($this->pros, $this->rows);
    $this->csvF = new csvD($this->wrt);
    $this->xlsxF = new xlsxD($this->sheet);
    echo '<tr class="data-heading">';
    foreach ($this->pros as $item){
        echo '<td>' . $item . '</td>';
    }
    echo '</tr>';
    foreach($this->rows as $row){
        echo "<tr>";
        foreach ($this->pros as $item) {
            echo '<td>' . $row[$item] . '</td>';
        }
        echo '</tr>';
    }
    }
    // public function downloadT(){
    //     if($this->type == 'csv'){

    //         $this->csvF->downloadCSV();
    //         }else if ($this->type == 'xlsx'){

    //         $this->xlsxF->downloadXLSX();
    //         }
    // }
    
    
    
 
}
?>