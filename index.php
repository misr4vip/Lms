<?php
$title = "Index";
$isActive = false;
include("_shared/header.php");

if (isset($_SESSION['isActive']) && $_SESSION['isActive'] == 1) {
    $isActive = true;
}else if (isset($_SESSION['isActive']) && $_SESSION['isActive'] == 0) {
    $isActive = false;
}else{
    echo '<script>window.location = "login.php";</script>';
}

?>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-2">
            <?php
            if ($isActive) {
            //    include("_shared/adminverticalMwnu.php");
            }
            ?>
        </div>
        <div class="col-md-8">
            <?php
            if (!$isActive) {
                echo '<h3 class = "bg-danger text-white text-center"> عفوا لم يتم تفعيل حسابك حتى الان </h3>';
            }
            ?>
        </div>
        <div class="col-md-2"></div>

    </div>
</div>

<?php
$mainScript = "/myJs/account.js";
$secondScript = '';
include("_shared/footer.php"); ?>