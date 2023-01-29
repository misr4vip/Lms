<?php
$title="Index";
include("_shared/header.php");

if(!isset($_SESSION['isActive']) || $_SESSION['isActive'] != 1)
{
    echo'<script> window.location="login.php"; </script> ';
}

echo '<h1>you are logged in</h1>'


?>