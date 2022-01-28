<?php
    include_once 'arrayToWhatever.php';
           require 'vendor/autoload.php';
        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\Writer\Csv;
    class arrayToCsv implements arraytoWhatever{
        private $sheet;
        private $spreadsheet;
        private $writer;
        public function __construct(){
            $this->spreadsheet = new Spreadsheet();
            $this->sheet = $this->spreadsheet->getActiveSheet();
        }
        public function convertData($pros, $rows){
            $ctr = 1;
            $ctc = 1;
            foreach($rows as $row){
                $ctc = 1;
                foreach ($pros as $item) {
                    $this->sheet->setCellValueByColumnAndRow($ctc, $ctr, $row[$item]);
                    $ctc++;
                }
                $ctr++;
            }
            $this->writer = new Csv($this->spreadsheet);
            $this->writer->setDelimiter(',');
            $this->writer->setEnclosure('"');
            $this->writer->setLineEnding("\r\n");
            return $this->writer;
        }
}
?>