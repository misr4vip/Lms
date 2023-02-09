<?php
$title = "profile";
include_once("config.php");
include_once("_shared/header.php");
if (!isset($_SESSION['isActive'])) {
  header('location:login.php');
}
?>

<div class="container-fluid mt-5">
  <h3>الملف الشخصي</h3>
  <hr />
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form id="formProfile" method="post">
        <div class="mb-3">
          <label class="form-label">الاسم باللغة العربية</label>
          <input type="text" id="arabic_name" name="arabic_name" disabled class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">الاسم باللغة الانجليزية</label>
          <input type="text" id="english_name" name="english_name" disabled class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">البريد الإلكتروني</label>
          <input type="text" id="email" name="email" required class="form-control">

        </div>
        <div class="mb-3">
          <label class="form-label">الجوال</label>
          <input type="text" id="mobile" name="mobile" required class="form-control">
        </div>
        <div class="col-md-12 text-center">
          <input type="submit" name="profilesubmit" value="حفظ" class="btn btn-primary ps-5 pe-5" />
        </div>
      </form>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

<?php
$mainScript = "/myJs/account.js";
$secondScript = '';
include("_shared/footer.php");
?>