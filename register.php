<?php $title="SignUp"; 
include("_shared/header.php");
include_once("Controller/Account.php");
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
  
    $account = new AccountController();
    $result =  $account->register($name,$email,$mobile,$password);
    if( $result)
    {
        header('location:login.php');
    }else
    {
        echo "Failed to add User ";
    }
}

?>

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <form  method="post">
  <div class="mb-3">
    <label class="form-label">name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" class="form-control">

  </div>
  <div class="mb-3">
    <label class="form-label">mobile</label>
    <input type="text" name="mobile" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

  <?php
  $mainScript = "/myJs/account.js";
  $secondScript = '';
  include("_shared/footer.php"); ?>