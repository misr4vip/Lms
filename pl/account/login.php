<?php

include_once("../../Controller/Account.php");
session_unset();
     
        $idintityId = $_POST['idintityId'];
        $password = $_POST['password'];
        $account = new AccountController();
        $result = $account->login($idintityId,$password);
        if($result)
        {
            $row = $result->fetch_assoc();
            session_start();
            $_SESSION['idintityId'] = $row['idintityId'];
            $_SESSION['arabic_name'] = $row['arabic_name'];
            $_SESSION['english_name'] = $row['english_name'];
            $_SESSION['accountType'] = $row['accountType'];
            $_SESSION['isActive'] = $row['isActive'];
            echo true;
        }else
        {
           echo false;
        }
    
   


 ?>