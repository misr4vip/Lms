<?php
require_once __DIR__."/../config.php";
require_once ROOT."/dbLayer/Operation.php";

class AccountController{

  private $operation;
  public function __construct()
  {
      $this->operation  = new Operations();
  }

  public function __destruct()
  {
      
  }
  public function login($idintityId,$password)
   {
   
    $query = "select * from  `account` where `idintityId`  = '$idintityId' and `password` = '$password' ";
    
    $result = $this->operation->selectData($query);
    
    return $result;
      
   }
  
   public function getAccountDetails($idintityId)
   {
   
    $query = "select * from  `account` where `idintityId`  = '$idintityId' ";
    
    $result = $this->operation->selectData($query);
    
    return $result;
      
   }
   public function register($name ,$email ,$mobile,$password)
   {
   
    $query = "insert into `users` (`name`,`email`,`mobile` ,`password`) values ('$name' ,'$email' , '$mobile','$password' )";
       $result =  $this->operation->ExcuteQuery($query);
       return $result;
   }
   

   public function updateAccount($idintityId,$email ,$mobile)
   {
   
    $query = "update `account` set  `email`='$email',`mobile`='$mobile' WHERE `idintityId`='$idintityId'";
       $result =  $this->operation->ExcuteQuery($query);
       return $result;
   }
   
//    public function updateAccount($idintityId,$arabic_name,$english_name,$email ,$mobile)
//    {
   
//     $query = "update `account` SET `arabic_name`='$arabic_name',`english_name`='$english_name',`email`='$email',`mobile`='$mobile' WHERE `idintityId`='$idintityId'";
//        $result =  $this->operation->ExcuteQuery($query);
//        return $result;
//    }
   

}

?>