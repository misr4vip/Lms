<?php
session_start();
include_once("../../Controller/Account.php");
$account = new AccountController();
$idintityId = $_SESSION['idintityId']; 
// if(isset($_POST['submit']))
// {
    // $arabic_name = $_POST['arabic_name'];
    // $english_name = $_POST['english_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    
    $result =  $account->updateAccount($idintityId,$email,$mobile);
    if( $result)
    {
       
        echo'تم تحديث الحساب بنجاح';
    }else
    {
        echo "فشل في عمليه التحديث";
    }
// }

?>