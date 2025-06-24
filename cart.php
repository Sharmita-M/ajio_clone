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
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <img id="aji_nav_logo" src="asserts/images/index_page_images/ajio logo.png" alt="">

            <div class="cart_img">
                <img src="asserts/images/cart_page_img/shopping_bag.png" alt="">
            </div>

            <div>

                <div class="d-flex align-items-center links ms-5" id="link_btn">
                    <a href="#" class="nav-link">Sign In / Join AJIO</a>
                    <a href="#" class="nav-link ms-3">Customer Care</a>
                    <a href="#" class="d-flex justify-content-center align-items-center btn-luxe ms-2">Visit AJIOLUXE</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="text-center mt-5 cart_div">
        <p>Your Shopping Bag is Empty!!</p>

        <p>
            <a href="#">Sign in</a> to link items to your account, or view items already in your account
        </p>

        <button class="continue">CONTINUE SHOPPING</button>
    </div>

    <div class="bottom-bar">
        <div class="bottom-bar-info">
            <img src="asserts/images/cart_page_img/secure_payment.png" alt="">
            <div>SECURE PAYMENTS</div>
        </div>
        <div class="bottom-bar-info">
            <img src="asserts/images/cart_page_img/cash_on_delivery.png" alt="">
            <div>CASH ON DELIVERY</div>
        </div>
        <div class="bottom-bar-info">
            <img src="asserts/images/cart_page_img/assured_quality.png" alt="">
            <div>ASSURED QUALITY</div>
        </div>
        <div class="bottom-bar-info">
            <img src="asserts/images/cart_page_img/easy_returns.png" alt="">
            <div>EASY RETURNS</div>
        </div>
    </div>


    <?php include 'includes/footer.php'?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>




