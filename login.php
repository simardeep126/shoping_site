<?php
require "db_conn.php";
require "navbar.php";

$log_in=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username_login = $_POST['user__name'];
    $password_login = $_POST['pass__word'];

    $query_login = "SELECT * FROM `accounts` WHERE username='$username_login' AND password='$password_login'";
$query_run=mysqli_query($conn,$query_login);


$number_row = mysqli_num_rows($query_run);

echo $number_row;
    if($number_row == 1){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username_login;

        header("location:main.php");
        exit;
    }else{
      
      $log_in=true;
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <br><br>
    <div class="heading_login">
        <h3 class="text-center">Login Form</h3>
    </div>
    <?php
    if($log_in==true){
      echo'  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">you are not login</h4>
  <p>your not login successfully please check the pssword and username,use correct password and username</p>
  <hr>
  <p class="mb-0">try again </p>
</div>  ';

    }?>
    <div class="form_login">
      <form action="" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="user__name">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="pass__word" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php include "footer.php"; ?>
