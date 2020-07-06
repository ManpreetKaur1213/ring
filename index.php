<!DOCTYPE html>
<html>
  <?php include 'views/header.php' ?>

  <title>HTML Tutorial</title>
  <body class="container-fluid">
      <h1>Hello world!</h1>

      <div class="card" style="width: 18rem;">
        <img src="../../assets/images/sky.jpg" alt="" class="img-fluid">
        <div class="card-body">
          <a href="views/search.php" class="btn btn-primary">Search Businesses</a>
        </div>
      </div>
      <?php
      
          $db_connection = pg_connect("host=".getenv('DB_HOST')." dbname=".getenv('DB_NAME')." user=".getenv('DB_USERNAME'));
      ?>
  </body>
</html>
