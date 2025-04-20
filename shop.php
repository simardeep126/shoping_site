<?php
session_start(); // Start session before requiring files
require "navbar.php";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bumbelz Shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   

    <style>
        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin: auto;
            padding: 20px;
        }
        .card {
            width: 18rem;
            margin: auto;
        }
        .container{
          margin-top: 60px;
        }
    </style>

    <div class="container">
        <h2 class="text-center">Welcome to Bumbelz Shopping Store</h2>
        <h3 class="text-center">Dear customer, buy anything in the shop—we have quality products!</h3>
    </div>

    <div class="products">
   
    <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>   <div class="card">
            <img src="product2.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-price">450</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php
require"footer.php";
?>
