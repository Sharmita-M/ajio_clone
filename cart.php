<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Cart Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="asserts/css/style.css">
    <link rel="stylesheet" href="asserts/css/cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-white text-gray-800">
    <nav class="navbar navbar-expand-lg navbar-light bg-white d-flex ">
         <div class="container">
     
            <div class="container w-25 ">
            <a class="navbar-brand" href="index.php"><img id="aji_nav_logo" src="asserts/images/index_page_images/ajio logo.png"
                    alt=""></a>
</div>

            <div class="cart_img">
                <img src="asserts/images/cart_page_img/shopping_bag.png" alt="">
            </div>

            <div class="mb-5"  style="font-size: 0.8rem;">

               <div class="d-flex align-items-start justify-content-end d-lg-flex d-sm-none mb-2 ms-6" id="link_btn">
                    <a href="login.php" class="nav-link ">Sign In / Join AJIO</a>

                    <a href="contact.php" class="nav-link ms-4 ">Customer Care</a>
                    <a href="contact.php" class="btn-luxe ms-3 d-flex align-items-center justify-content-center">Visit
                        AJIOLUXE</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="text-center mt-5 cart_div">
        <p>Your Shopping Bag is Empty!!</p>

        <p>
            <a href="#">Sign in</a> to link items to your account, or view items already in your account
        </p>

        <button class="continue mb-5">CONTINUE SHOPPING</button>
    </div>

   <div class="container-fluid bottom-bar d-flex align-items-center justify-content-center mt-5 mb-5">
    <div class="row text-center ">
      <div class="col-6 col-md-3 mb-4 bottom-bar-info d-flex align-items-center justify-content-center">
        <img src="asserts/images/cart_page_img/secure_payment.png" alt="">
        <div>SECURE PAYMENTS</div>
      </div>
      <div class="col-6 col-md-3 mb-4 bottom-bar-info d-flex align-items-center justify-content-center">
        <img src="asserts/images/cart_page_img/cash_on_delivery.png" alt="">
        <div >CASH ON DELIVERY</div>
      </div>
      <div class="col-6 col-md-3 mb-4 bottom-bar-info d-flex align-items-center justify-content-center">
        <img src="asserts/images/cart_page_img/assured_quality.png" alt="">
        <div >ASSURED QUALITY</div>
      </div>
      <div class="col-6 col-md-3 mb-4 bottom-bar-info d-flex   align-items-center justify-content-center">
        <img src="asserts/images/cart_page_img/easy_returns.png" alt="">
        <div>EASY RETURNS</div>
      </div>
    </div>
  </div>



    <?php include 'includes/footer.php'?>





