<?php
session_start();
include_once("../../Controller/Roles.php");
$roles = new RolesController();
    $roleName = $_POST['roleName'];
    $result =  $roles->create($roleName);
    if( $result)
    {
       
        echo'تم الإضافة بنجاح';
    }else
    {
        echo "فشل في عمليه الإضافة";
    }
?>