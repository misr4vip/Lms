<?php
$title="create Role";
include("../_shared/header.php");
?>

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form  id="roleAddForm">

        <div class="mb-3">
          <label class="form-label"><b> اسم الصلاحية</b></label>
          <input type="text" id="roleName" name="roleName" required class="form-control">

        </div>

       
        <div class="text-center">
        <button type="submit" name="createRoleSubmit"  class="btn btn-success ps-5 pe-5" >اضافة</button>
        </div>
       
      </form>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

<?php
$mainScript = "/myJs/Roles.js";
$secondScript = '';
 include("../_shared/footer.php"); ?>