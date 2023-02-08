<?php
$title="SignIn";
include("_shared/header.php");
?>

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form  id="forgetPasswordForm">

        <div class="mb-3">
          <label class="form-label"><b>رقم الهوية</b></label>
          <input type="text" id="idintityId" name="idintityId" required class="form-control">

        </div>
        <div class="mb-3">
          <label class="form-label"><b>الايميل المسجل </b></label>
          <input type="email" id="email" name="email" required class="form-control">
        </div>
        <div class="text-center">
        <input type="submit" name="forgetPasswordSubmit" required  class="btn btn-success ps-5 pe-5" value="ارسال"/>
       
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