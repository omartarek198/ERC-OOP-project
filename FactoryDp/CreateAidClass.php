<?php

include_once 'Database.php';

class CreateClass {

    private $db;
    public  $sql = "",$stmt ="";

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function insertMoneyRecord($name, $phoneno,$income,$address, $desc,$rqtype)
   {


$this->sql = "INSERT INTO request (name,phonenum,Income,Descriptione) VALUES ('$name', $phoneno, $income, '$desc')";

   }
   
   public  function AddValuesToDatebase($name,$phone,$desc,$income,$fam,$type)
   {

       $this->sql = "INSERT INTO request (name,phonenum,Description) VALUES ('$name', $phone, '$desc')";



       if (mysqli_query($this->link, $this->sql)) {
           $id = mysqli_insert_id($this->link);
           if($type == 2)
           {
               $this->sql = "INSERT INTO mealrequest (familysize,requestid) values ($fam,$id)";
           }
           if($type == 1)
           {
               $this->sql = "INSERT INTO financialrequest     (income,requestid) values ($income,$id)";
           }

           if (mysqli_query($this->link, $this->sql))
           {
               echo 'DONEE';
           }


  echo "New record created successfully";


  return TRUE;
} else {
     echo "Error: " . $this->sql . "<br>" . mysqli_error($this->link);
 
}
 
mysqli_close($this->link);
        return FALSE;
    }

   
   public function insertFoodRecord($name,$phone,$NumOfFam,$Address,$desc,$rqtype)
   {

       $this->sql = "INSERT INTO request (name,phonenum,NumrOfFamMembers,Address,Description,RequestType) VALUES ('$name', $phone, $NumOfFam,'$Address' ,'$desc',$rqtype)";
        $this->AddValuesToDatebase();
   
   }

}




