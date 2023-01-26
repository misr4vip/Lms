<?php

$title="profile"; 

// if (!isset($_SESSION['userId'])) {
//     header('location:login.php');
// }
include_once("_shared/header.php");
include_once("Controller/Account.php");
$account = new AccountController();
$id = $_SESSION['userId']; 
$profileResult = $account->getUserDetails($id);
$row = $profileResult->fetch_assoc();
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    
    $result =  $account->update($id,$name,$email,$mobile);
    if( $result)
    {
        $_SESSION['username'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['userId'] = $id;
        echo'<script> window.location="index.php"; </script> ';
    }else
    {
        echo "Failed to update User ";
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
    <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">

  </div>
  <div class="mb-3">
    <label class="form-label">mobile</label>
    <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control">
  </div>
  

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

  <?php include("_shared/footer.php"); ?>