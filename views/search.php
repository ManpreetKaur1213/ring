<!DOCTYPE html>
<html>
  <?php include 'header.php' ?>

  <body class="container" style="background-image: url('../assets/images/sky.jpg');background-repeat: no-repeat;background-size: cover;">
    
    <form class="col-6 offset-3 mt-5 bg-light rounded shadow p-3">
      <div class="form-row">
        <div class="form-group col-6">
          <label for="term" class="sr-only">Term</label>
          <input type="text" class="form-control" id="term" placeholder="Search yelp for business" required="">
        </div>
        <div class="form-group col-6">
          <label for="location" class="sr-only">Another label</label>
          <input type="text" class="form-control" id="location" placeholder="business location" required="">
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary btn-block">Search</button>
    </form>
  
</body>
    
    
  </body>
</html>