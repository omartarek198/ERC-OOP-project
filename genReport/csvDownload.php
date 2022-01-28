<?php
       require 'vendor/autoload.php';
        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\Writer\Csv;

class csvD{


//private $spreadsheet;
//private $sheet;
private $writer;
    public function __construct($sheet){
//        $this->spreadsheet = new Spreadsheet();
//        $this->sheet = $this->spreadsheet->getActiveSheet();
        $this->writer = $sheet;
    }
//    public function getData($sheet){
//        $this->spreadsheet = $sheet;
//        $writer = new Csv($spreadsheet);
//        $writer->setDelimiter(';');
//        $writer->setEnclosure('"');
//        $writer->setLineEnding("\r\n");
//        $writer->setSheetIndex(0);
//        $this->writer = new Csv($this->spreadsheet);
//    }
    public function downloadCSV(){
        $this->writer->save('csvD.csv');
    }

}
        
?>