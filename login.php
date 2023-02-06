<?php
$title="SignIn";
include("_shared/header.php");
?>

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form  id="loginForm">

        <div class="mb-3">
          <label class="form-label"><b>رقم الهوية</b></label>
          <input type="text" id="idintityId" name="idintityId" required class="form-control">

        </div>

        <div class="mb-3">
          <label class="form-label"><b>كلمة المرور</b></label>
          <input type="password" id="password" name="password" required class="form-control">
        </div>
        <div class="text-center">
        <input type="submit" name="loginSubmit"  class="btn btn-success ps-5 pe-5" value="تسجيل الدخول"/> | <input type="button" name="resetPassSubmit"  class="btn btn-danger ps-5 pe-5" value="نسيت كلمة المرور"/>
        </div>
       
       
      </form>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

<?php
$mainScript = "/myJs/account.js";
$secondScript = '';
 include("_shared/footer.php"); ?>