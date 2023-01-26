<?php

require_once ("Constant.php");
class Operations
{
    private $database ;

    public function __construct()
    {
    
        $this->database = new MyDatabase();
    }

    public function __destruct()
    {
        
    }
    function selectData($Query)
    {
        $result = mysqli_query($this->database->GetConnection(),$Query); 
        if ($result->num_rows > 0)
        {
           return $result;
        }else
        {
            return false;
        }
    }
    function ExcuteQuery($Query)
    {
        $result = mysqli_query($this->database->GetConnection(),$Query);
      
        if ($result)
        {
            return true;
        }else
        {
            die(mysqli_error($this->database->GetConnection()));
            return false;
        }
            
       
    }

    function getConnection()
    {
        return $this->database->getConnection;
    }
    function getCount($query)
    {
        $query = mysqli_query($this->database->GetConnection(),$query);
      //  $result = mysqli_result($query,0);
       return $query->fetch_field();
    }
}
?>