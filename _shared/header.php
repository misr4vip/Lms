<?php
session_start();
require_once __DIR__ . "/../config.php";

?>

<!doctype html>
<html dir="rtl" lang="ar-SA">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo HTTP_PATH_ROOT.'/css/bootstrap.rtl.min.css';?>" />

  <title><?php echo $title; ?></title>
</head>

<body >


<nav  class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?php echo HTTP_PATH_ROOT;?>/index.php">مدارس رياض الإسلام</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse"  id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
          

          <?php
          // $_SESSION['isAdmin'] = "1";
          // $_SESSION['name'] = "Mahmoud";
          if (isset($_SESSION['name']) && !empty($_SESSION['name'])) {
            $control = "";
            if ($_SESSION['isAdmin'] == "1") {
              $control = ' <li>
              <a href="'.HTTP_PATH_ROOT.'/MainCategory/index.php" target="_blank" class="dropdown-item">Control Panel </a>
              </li>';
            }
            echo    '
            
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            مرحبا بعودتك, ' . $_SESSION['name'] . '
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            '.$control.'
            <li>
            <a href="'.HTTP_PATH_ROOT.'/MyAdvertisment.php" class="dropdown-item">My Advertisment </a>
            </li>
             <li>
             <a href="'.HTTP_PATH_ROOT.'/profile.php" class="dropdown-item">profile </a>
             </li>
             <li>
             <a href="'.HTTP_PATH_ROOT.'/logout.php" class="dropdown-item">LogOut</a>
             </li>
             </ul>';
          } else {
            echo    ' <li class="nav-item"><a href="'.HTTP_PATH_ROOT.'/login.php" class="nav-link">
            تسجيل الدخول
           </a></li> <li class="nav-item"><a href="'.HTTP_PATH_ROOT.'/register.php" class="nav-link">
           انشاء حساب
          </a></li>';
          }
          ?>
          <!-- </a></li> -->
        </ul>
    </div>
  </div>
</nav>
