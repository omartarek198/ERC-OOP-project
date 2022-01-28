<?php
       require 'vendor/autoload.php';
//        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class xlsxD{


//private $spreadsheet;
//private $sheet;
private $writer;
    public function __construct($writer){
//        $this->spreadsheet = new Spreadsheet();
//        $this->sheet = $this->spreadsheet->getActiveSheet();
        $this->writer = $writer;
    }
//    public function setData($sheet){
////        $this->spreadsheet->addSheet($sheet);
//        $this->spreadsheet = $sheet;
//        $this->writer = new Xlsx($this->spreadsheet);
//    }
    public function downloadXLSX(){
        $this->writer->save('xlsxD.xlsx');
    }
}
        
?>