<?php
$title="SignIn";
include("_shared/header.php");
include_once("Controller/Account.php");
session_unset();
       

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $account = new AccountController();
    $result = $account->login($email,$password);
    if($result)
    {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $email;
        $_SESSION['name'] = $row['name'];
        $_SESSION['userId'] = $row['id'];
        $_SESSION['isAdmin'] = $row['isAdmin'];
        echo'<script> window.location="index.php"; </script> ';
    }else
    {
        header('location:login.php');
        echo '<p class="text-white mt-5 bg-danger" >Invalid User Data!</p> ';
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
          <input type="email" name="email" class="form-control">

        </div>

        <div class="mb-3">
          <label class="form-label"><b>كلمة المرور</b></label>
          <input type="password" name="password" class="form-control">
        </div>
        <div class="text-center">
        <button type="submit" name="submit" class="btn btn-success ps-5 pe-5">تسجيل الدخول</button>
        </div>
       
      </form>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

<?php include("_shared/footer.php"); ?>