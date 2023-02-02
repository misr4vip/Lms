<?php
$title="create Role";
include("../_shared/header.php");
?>

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <table class="table table-bordered" id="roleTable">
        <tr class="bg-success text-white text-center">
            <td>الكود</td>
            <td>اسم الصلاحية</td>
            <td>#</td>
</tr>
       
      </table>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

<?php
$mainScript = "/myJs/Roles.js";
$secondScript = '';
 include("../_shared/footer.php"); ?>