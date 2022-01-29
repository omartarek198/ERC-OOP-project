<?php
include_once 'Database.php';
class ReadRequest
{
    private $db;
    private $link;

    public function __construct()
    {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }
        public
        function readmealreqs()
        {

            $sql = " SELECT * FROM mealrequest LEFT JOIN request ON request.RequestId = mealrequest.requestid";
            if ($result = mysqli_query($this->link, $sql))
            {
                echo "we are in";
                return $result;
            }
            else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
                return false;
            }

            mysqli_close($this->link);
            return false;
        }
    function readfinancreq()
    {

        $sql = " SELECT * FROM financialrequest LEFT JOIN request ON request.RequestId = financialrequest.requestid";
        if ($result = mysqli_query($this->link, $sql))
        {
            echo "we are in";

            return $result;
        }
        else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
            return false;
        }

        mysqli_close($this->link);
        return false;
    }



}