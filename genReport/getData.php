<?php
require_once 'genReportModel.php';
class getData
{
    private $tbRead;
    private $result;
    private $all_property;
    private $rows;
    public function __construct($t){
        $this->tbRead = new readTable($t);
        $this->result = $this->tbRead->dispTable();
    }
    public function setRe($tname){
        $this->tbRead->setRe($tname);
    }
    public function getCNames(){
    $this->all_property = array();
    while ($property = mysqli_fetch_field($this->result)) {
        $this->all_property[] = $property->name;
    }
    return $this->all_property;
    }
    public function getRows(){
    $this->rows = array();
    while ($row = mysqli_fetch_array($this->result)) {
        $this->rows[] = $row;
        
    }
        return $this->rows;
    }
}
?>