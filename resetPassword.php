<?php
$title="SignIn";
include("_shared/header.php");
?>

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form  id="resetPasswordForm">

        <div class="mb-3">
          <label class="form-label"><b> كلمة المرور</b></label>
          <input type="password" id="oldPassword" name="oldPassword" required class="form-control">

        </div>
        <div class="mb-3">
          <label class="form-label"><b>الايميل المسجل </b></label>
          <input type="password" id="newPassword" name="newPassword" required class="form-control">

        </div>
        <div class="text-center">
        <input type="submit" name="resetPasswordSubmit" required  class="btn btn-success ps-5 pe-5" value="ارسال"/>
       
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