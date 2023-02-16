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
   
   public function resetPassword($idintityId,$oldPassword,$newPassword )
   {
   
      $query = "select COUNT(*) from  `account` where `idintityId`  = '$idintityId' and `email` = '$oldPassword' ";
      
    $result = $this->operation->selectData($query);
    if (mysqli_num_rows($result) > 0) {

      $query = "update `account` set  `password`='$newPassword'WHERE `idintityId`='$idintityId'";
       $eresult =  $this->operation->ExcuteQuery($query);
       return $eresult;
    }else if(mysqli_num_rows($result) == 0){
      echo "cann't found data!";
    }else{
      echo false;
    }
   }
   
   public function forgetPassword($idintityId,$email){
    $query = "select COUNT(*) from  `account` where `idintityId`  = '$idintityId' and `email` = '$email' ";
      
    $result = $this->operation->selectData($query);
    if (mysqli_num_rows($result) > 0) {

            $userResult = $this->getAccountDetails($idintityId);
            $data =  mysqli_fetch_assoc($userResult);
           // echo $data['arabic_name'];
        $to = $data['email'];
        $subject = "you request to reset password";
        
        $message = "<b>السيد :".$data['arabic_name']."</b>";
        $message .= "<h1>بناءا على طلبك ها هي كلمة المرور التي طلبتها ". $data['password']."</h1>";
        
        $header = "From:fayez.elghoul@gmail.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        
        $retval = mail ($to,$subject,$message,$header);
        
        if( $retval == true ) {
           echo "تم ارسال بريد الكتروني يحتوى على كلمة المرور خاصتك " ."\n";
        }else {
           echo "لم نتمكن من ارسال كلمة المرور "."\n";
        }
        return true;
    }else
    {
        return false ;
    }

   }
   

}

?>