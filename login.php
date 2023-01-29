<?php
$title="SignIn";
include("_shared/header.php");
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

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form  method="post">

        <div class="mb-3">
          <label class="form-label"><b>رقم الهوية</b></label>
          <input type="text" name="idintityId" required class="form-control">

        </div>

        <div class="mb-3">
          <label class="form-label"><b>كلمة المرور</b></label>
          <input type="password" name="password" required class="form-control">
        </div>
        <div class="text-center">
        <input type="submit" name="submit" value="تسجيل الدخول" class="btn btn-success ps-5 pe-5"/>
        </div>
       
      </form>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

<?php include("_shared/footer.php"); ?>