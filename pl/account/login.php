<?php

include_once("Controller/Account.php");
session_unset();
       

if(isset($_POST['submit']))
{
    
    $idintityId = $_POST['idintityId'];
    $password = $_POST['password'];
    $account = new AccountController();
    $result = $account->login($idintityId,$password);
    if($result)
    {
        $row = $result->fetch_assoc();
        $_SESSION['idintityId'] = $idintityId;
        $_SESSION['isActive'] = true;
        echo $idintityId;
        // header('location:index.php');
        // exit;
        echo'<script> window.location="index.php"; </script> ';
    }else
    {
       // header('location:login.php');
       echo'<script> alert("خطأ في اسم المستخدم او كلمة المرور "); </script> ';
        //echo '<p class="text-white mt-5 bg-danger" >Invalid Account Data!</p> ';
    }
}

 ?>