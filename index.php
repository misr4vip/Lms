<?php
$title = "Index";
$isActive = false;
include("_shared/header.php");
include("user.php");
$user = new user();
if(!$user->isLogged()){
    echo '<script>window.location = "login.php";</script>';
}

?>
<div class="container-fluid">
    <div class="row mt-5">
    <?php
            if ($user->isActiveAccount()) {
        echo '   <div class="col-md-2">
            
        </div>
        <div class="col-md-8">
        
        </div>
        <div class="col-md-2"></div>';
            //    include("_shared/adminverticalMwnu.php");
            } else {
                echo '<h3>عفوا لم يتم تفعيل حسابك</h3>';
            }
            ?>
       

    </div>
</div>

<?php
$mainScript = "/myJs/account.js";
$secondScript = '';
include("_shared/footer.php"); ?>