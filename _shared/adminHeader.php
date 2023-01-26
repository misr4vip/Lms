<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
   <?php 
   
   if ($title == "Admin CP")
   {
     echo ' <link rel="stylesheet" href="content/admin.css"/>';
   }else
   {
     echo '<link rel="stylesheet" href="../content/admin.css"/>';
   }
   
   
   ?>
    
   
    <title><?php echo $title; ?></title>
  </head>
  <body>
      <div class="container-fluid mt-5">
          <div class="row">
              <div class="col-md-2">
                  <?php include('adminverticalMenu.php'); ?>
              </div>
              <div class="col-md-10">
                  