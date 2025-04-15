
<!-- add navbar in page -->
<?php
include "navbar.php";




?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="heading_login">
        <h3 class="text-center"> 
        signup form
        </h3>
    </div>
    <div class="form_login">


   <form>
   <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="username" class="form-control" id="username" aria-describedby="username">
    </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label for="exampleInputnumber" class="form-label">Number</label>
    <input type="number" class="form-control" id="exampleInputnumber" aria-describedby="emailHelp number">
    </div>
    
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  
  
  <div class="mb-3">
    <label for="exampleInputconfirm Password1" class="form-label">confirm Password</label>
    <input type="password" class="form-control" id="exampleInput confirm Password1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>



<!-- add footer in  page -->
<?php
include "footer.php";
?>