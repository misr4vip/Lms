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
  <link rel="stylesheet" href="<?php echo HTTP_PATH_ROOT . '/css/bootstrap.rtl.min.css'; ?>" />

  <title>
    <?php echo $title; ?>
  </title>
</head>

<body>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo HTTP_PATH_ROOT; ?>/index.php">مدارس رياض الإسلام</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto  text-right mb-2 mb-lg-0">
          <?php
          if (isset($_SESSION['isActive']) && $_SESSION['isActive'] == 1) {
            echo '
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            مرحبا بعودتك, ' . $_SESSION['arabic_name'] . '
            </a>
            <ul class="dropdown-menu">
            <li>
            <a href="' . HTTP_PATH_ROOT . '/MyAdvertisment.php" class="dropdown-item">My Advertisment </a>
            </li>
            <li><hr class="dropdown-divider"></li>
             <li>
             <a href="' . HTTP_PATH_ROOT . '/profile.php" class="dropdown-item">الملف الشخصي </a>
             </li>
             <li><hr class="dropdown-divider"></li>
             <li>
             <a href="' . HTTP_PATH_ROOT . '/resetPassword.php" class="dropdown-item">تغيير كلمة المرور </a>
             </li>
             <li><hr class="dropdown-divider"></li>
             <li>
             <a href="' . HTTP_PATH_ROOT . '/logout.php" class="dropdown-item">تسجيل خروج</a>
             </li>
             </ul></li>';
          } else if (isset($_SESSION['isActive']) && $_SESSION['isActive'] == 0) {

          } else {
            echo ' <li class="nav-item"><a href="' . HTTP_PATH_ROOT . '/login.php" class="nav-link">
            تسجيل الدخول
           </a></li> <li class="nav-item"><a href="' . HTTP_PATH_ROOT . '/register.php" class="nav-link">
           انشاء حساب
          </a></li>';
          }
          ?>

        </ul>
      </div>
    </div>
  </nav>