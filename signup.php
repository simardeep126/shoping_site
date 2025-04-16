
<!-- add navbar in page -->
<?php




require "db_conn.php";
include "navbar.php";


if($_SERVER["REQUEST_METHOD"]=="POST"){
  $user_name=$_POST['username'];
  $email_address=$_POST['email_address'];
  $phn_number=$_POST['phnnumber'];
  $pass_word=$_POST['pass_word'];
  $confirm_pass_word=$_POST['confirm_pass_word'];
}




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
    <br><br>
    <div class="heading_login">
        <h3 class="text-center"> 
        signup form
        </h3>
    </div>
    <div class="form_login">


   <form action="signup.php" method="POST">
   <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="username" class="form-control" id="username"  name="username"aria-describedby="username">
    </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email_address" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label for="exampleInputnumber" class="form-label"> Phn-Number</label>
    <input type="phnnumber" class="form-control" id="number" name="phnnumber" aria-describedby=" number">
    </div>
    
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass_word" placeholder="choose strong password">
  </div>
  
  
  
  <div class="mb-3">
    <label for="exampleInputconfirm Password1" class="form-label">confirm Password</label>
    <input type="password" class="form-control" name="confirm_pass_word" id="exampleInput confirm Password1">
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