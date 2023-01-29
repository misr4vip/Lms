<?php
$title="SignIn";
include("_shared/header.php");
?>

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <!-- <form  method="post"> -->

        <div class="mb-3">
          <label class="form-label"><b>رقم الهوية</b></label>
          <input type="text" name="idintityId" required class="form-control">

        </div>

        <div class="mb-3">
          <label class="form-label"><b>كلمة المرور</b></label>
          <input type="password" name="password" required class="form-control">
        </div>
        <div class="text-center">
        <button  name="submit" id="loginbtn"  class="btn btn-success ps-5 pe-5">تسجيل الدخول</button>
        </div>
       
      <!-- </form> -->
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

<?php
$mainScript = "/myJs/account.js";
 include("_shared/footer.php"); ?>