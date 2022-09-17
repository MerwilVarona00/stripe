<?php
require "vendor/autoload.php";
$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIJDBAOXNz4ZwqxpPYrrlEwVKdeybiZdtWFpWtrSq3810wYG7x4SSHxNepxfsFWR6iba6jnQuL8R7BLoWOUEG700FBPQby16',
  );
  $product = $stripe->products->retrieve(
    'prod_MP8z93sCKOSqLP',
    []
  );
  $price = $stripe->prices->retrieve('price_1LhpBPBAOXNz4Zwq0kE4aIYe',[]);
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>MURRAY'S Pomade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<body style="background-color:#FFB25E;">

<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">MURRAY'S</h5>
    <span class="text-muted">Classic Grooming style & kit.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
</br>
</br>
</br>
</br>
</br>
</br>

<section>
<div class="card">
<div class="row justify-content-md-center">
<div class="product">
<div class="col"></br>
<img src="<?php echo array_pop($product->images); ?>" alt="<?php echo $product->name; ?>" width="260" height="270"/>
</div>
<div class="description">
<div class="col">
<h3><?php echo $product->name; ?></h3>
<p><strong><?php echo $product->description; ?></strong></p>
<h5><?php echo strtoupper($price->currency); ?> <?php echo $price->unit_amount_decimal; ?></h5>
<form action="/stripe/my-product.php" method="POST">
<button type="submit" id="checkout-button">PURCHASE</button>
</form>
</body>
</html>


