<!DOCTYPE html>
<<<<<<< HEAD
 <html>
   <?php include 'header.php' ?>
   <?php include_once 'curl.php' ?>

   <body class="container" style="background-image: url('../assets/images/sky.jpg');background-repeat: no-repeat;background-size: cover;">

     <form class="col-6 offset-3 mt-5 bg-light rounded shadow p-3" method="GET">
       <div class="form-row">
         <div class="form-group col-6">
           <label for="term" class="sr-only">Term</label>
           <input type="text" class="form-control" name="term" placeholder="Search yelp for business" required=""/>
         </div>
         <div class="form-group col-6">
           <label for="location" class="sr-only">Another label</label>
           <input type="text" class="form-control" name="location" placeholder="business location" required=""/>
         </div>
       </div>

       <input type="submit" class="btn btn-primary btn-block" value="Submit"/>
     </form>
     <?php


     if ($result != NULL) {

    $data=json_decode($result,true);
    foreach($data['businesses'] as $business){
        echo $business['name']."</br>";
        echo "<img src=".$business['image_url']." />";
        echo "<hr class='col-12'>";
      }
     }
     ?>
 


   </body>
 </html> 
=======
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
>>>>>>> 21a398e4bff2ef70f32d20e1af8cf8353593fdd5
