<?php
require "navbar.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Alert Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        .alert {
            margin-top: 100px;
            text-align:center;
        }
        body {
  background-image: url(bgimg.png);
  background-size: cover; 
  background-position: center; 
  background-repeat: no-repeat; 
}
    </style>
  </head>
  <body>
  <div class="alert " role="alert">
  <h4 class="alert-heading">Success!</h4>
  <p>You have successfully triggered this alert message. Bootstrap makes it easy to style alerts and other UI components.</p>
  <hr>
  <p class="mb-0">Click <a href="./logoutpage.php">here</a> to log out securely.</p>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
<?php
require "footer.php";
?>
   