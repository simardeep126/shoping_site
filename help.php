<!-- Add navbar -->
<?php include "navbar.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enquiry Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <style>
    .help {
        height: 15vh;
        width: 70vw;
        border: 2px solid black;
        font-size: 1.25rem;
        border-radius: 10px;
        padding: 10px;
    }
    body {
  background-image: url(bgimg.png);
  background-size: cover; 
  background-position: center; 
  background-repeat: no-repeat; 
}
  </style>

  <body>

    <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
        <a href="/" class="d-flex align-items-center text-decoration-none">
            <span class="fs-4">Bumbelz - Help & Support</span>
        </a>
    </header>

    <main class="container">
        <h1 class="text-center">Welcome to Bumbelz</h1>
        <h3 class="text-center">Dear customer, we are here to help!</h3>
        <p class="text-center">Please select your issue and submit your phone number. If your issue is not listed, write it in the text area below.</p>

        <form action="" method="POST" class="p-4 border rounded bg-light">
            <div class="mb-3">
                <label class="form-label">Select your enquiry type:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="passwordCheck">
                    <label class="form-check-label" for="passwordCheck">Regarding password</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="loginCheck">
                    <label class="form-check-label" for="loginCheck">Regarding login</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="addressCheck">
                    <label class="form-check-label" for="addressCheck">Address</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="personalCheck">
                    <label class="form-check-label" for="personalCheck">Personal details</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="deliveryCheck">
                    <label class="form-check-label" for="deliveryCheck">Delivery</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="paymentCheck">
                    <label class="form-check-label" for="paymentCheck">Payment method</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="enquiryBox" class="form-label">Write your enquiry:</label>
                <textarea name="enquiry" id="enquiryBox" class="help form-control" rows="4" placeholder="Describe your issue here..."></textarea>
            </div>

            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Enter your phone number:</label>
                <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Enter your phone number">
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Add footer -->
    <?php include "footer.php"; ?>
    
  </body>
</html>
