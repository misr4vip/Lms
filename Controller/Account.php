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
  public function login($email,$password)
   {
   
    $query = "select * from  `users` where email  = '$email' and password = '$password' ";
    $result = $this->operation->selectData($query);
    return $result;
      
   }
   public function getUserDetails($id)
   {
   
    $query = "select * from  `users` where `id`  = '$id'";
    $result = $this->operation->selectData($query);
    return $result;
      
   }
   public function register($name ,$email ,$mobile,$password)
   {
   
    $query = "insert into `users` (`name`,`email`,`mobile` ,`password`) values ('$name' ,'$email' , '$mobile','$password' )";
       $result =  $this->operation->ExcuteQuery($query);
       return $result;
   }

   public function update($id,$name ,$email ,$mobile)
   {
   
    $query = "UPDATE `users` SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE `id` ='$id' ";
       $result =  $this->operation->ExcuteQuery($query);
       return $result;
   }

}

?>