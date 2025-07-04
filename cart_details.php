
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Shopping Bag | AJIO</title>

    <link rel="stylesheet" href="asserts/css/style_clone.css">
    <link rel="stylesheet" href="asserts/css/cart.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>


<body>
    <div class="header-contai
    ner">
        <header>
            <div class="signin-customer-care">
                <ul>
                    <li>
                        <a href="#" id="username"></a>
                    </li>
                    <li onclick="showBox()">
                        <p id="signin">Sign In / Join AJIO</p>
                    </li>
                    <li onclick="signOut()">
                        <p id="signout">Sign Out</p>
                    </li>
                    <li>
                        <a href="#">Customer Care</a>
                    </li>
                </ul>
            </div>
            <div class="logo-box">
                <a href="index.html">
                    <img class="logo-img" src="images/Ajio-Logo.svg" alt="">
                </a>
            </div>

            <div class="nav">
                <img src="images/header/first.PNG" alt="">
            </div>
        </header>
    </div>

    <!--------------SignIn box start ---------->
    <div class="sign-in-container">
        <div class="sign-in-box">

            <div onclick="hideBox()" class="close">X</div>


            <h2 class="box-heading top">Welocome to AJIO</h2>
            <h3 class="box-heading join">Join/Sign In using</h3>
            <div class="link-box">
                <div class="fb"><img src="images/signInBox/fb.jpg" alt=""> Facebook</div>
                <div class="google"><img src="images/signInBox/google.jpg" alt=""> Google</div>
            </div>
            <div class="or">Or</div>
            <div class="line left"></div>
            <div class="line right"></div>
            <h3 class="box-heading small" id="inputHeading">Enter Mobile Number*</h3>

            <p id="warning"></p>
            <input type="text" id="number"><br>
            <div class="hide input-container" id="inputCont">
                <div class="radioBox" id="radioBox">Gender:
                    <label>
                        <input type="radio" name="radio-button" value="no" />
                        <span>Female</span>
                    </label>

                    <label>
                        <input type="radio" name="radio-button" value="no" />
                        <span>Male</span>
                    </label>
                </div>
                <input type="text" id="name" placeholder="Name"><br>
                <input type="text" id="email" placeholder="Email"><br>
                <input type="password" id="password" placeholder="Password">
            </div>
            <button onclick="goToSignUP()" class="continue" id="continueBtn">CONTINUE</button>
            <h3 class="box-heading lite">By Signing in, I agree to <span class="blue-span">Term and Conditions.</span>
            </h3>
        </div>
    </div>
    <!--------------SignIn box end ------------>
    <!-- Quantity popup starts -->

    <div class="quantity-container">
        <div class="quantity-box">
            <div class="sel-size">Select Size</div>

            <div class="size">
                <div class="sz" id="s">
                    <p>S</p>
                </div>
                <div class="sz" id="m">
                    <p>M</p>
                </div>
                <div class="sz" id="l">
                    <p>L</p>
                </div>
                <div class="sz" id="xl">
                    <p>XL</p>
                </div>
            </div>


            <div class="sel-quat">Select Quantity</div>
            <div class="quantity-change">
                <div id="minus" onclick="decrease_quantity()">-</div>
                <div class="size">
                    <div class="sz qant">
                        <p>1</p>
                    </div>
                </div>
                <div id="add" onclick="increase_quantity()">+</div>
            </div>

            <div class="update-quantity" onclick="update_and_close(this.id)">UPDATE</div>
        </div>
    </div>

    <!-- Quantity popup ends -->

    <div id="blank"></div>


    <div id="ad">
        <img src="images/cart_images/cart2.webp" alt="">
    </div>

    <div class="empty-cart">
        <div class="empty-bag">Your Shopping Bag is Empty!</div>
        <div class="continue-shop-button" onclick="continue_shopping()">CONTINUE SHOPPING</div>
    </div>

    <div id="cart-product">
        <div class="column-1">
            <div class="bag-count">
                <div>My Bag <span id="item-count">(0 Item)</span></div>
                <div class="add-closet">+ Add From Closet</div>
            </div>
            <div id="item-card">
                <!-- <div class="product-show">
                    <img src="images/procuct_1_images/rayban3" alt="">
                    <a href="">Ray Ban - 0RB3671186/3160 UV-Protected Full-Rim Shield Sunglasses</a>
                    <div class="product-size">Size <span>OS</span> &or;</div>
                    <div class="cart-qty">Qty <span> 1</span> &or;</div>
                    <div class="delete">Delete</div>
                    <div class="amount">
                        <div class="total-amount">Rs. 950</div>
                        <div class="move">Move To Closet</div>
                    </div>
                </div> -->
            </div>
            <div class="add-more"></div>
        </div>
        <div class="column-2">
            <div class="bill">
                <div>Order Details</div>
                <div class="bag-total bill-card">
                    <div>Bag Total</div>
                    <div id="bag-item-amount">Rs. 950</div>
                </div>
                <div class="bag-delivery bill-card">
                    <div>Delivery</div>
                    <div id="bag-delivery-amount">FREE</div>
                </div>
                <div class="bag-total bill-card">
                    <div>Total Amount</div>
                    <div id="bag-total-amount">Rs. 950</div>
                </div>
                <button id="proceed-to-ship" onclick="open1()">PROCEED TO SHIPPING</button>
            </div>
            <div id="coupon">
                <div class="coupon-info">Apply Coupon</div>
                <div class="coupon-input">
                    <input type="text" placeholder="ENTER COUPON CODE" />
                    <button class="apply-coupon">APPLY</button>
                </div>

                <div class="coupon-available">
                    <div class="coupon-info">Applicable Coupons</div>
                    <div class="coupon-show">
                        <input type="radio" id="coupon1" name="coupon">
                        <label for="coupon">
                            <div class="coupon-saving">Savings <span>Rs.50</span></div>
                            <div>LUCKY</div>
                            <div>Get Flat 50 Off on bill value of 1190 and above.</div>
                            <div class="link">View T & C</div>
                        </label>
                    </div>
                    <div class="coupon-show">
                        <input type="radio" id="coupon1" name="coupon">
                        <label for="coupon">
                            <div class="coupon-saving">Savings <span>Rs.50</span> </div>
                            <div>FREESHIP</div>
                            <div>Shipping on us for your first purchase</div>
                            <div class="link">View T & C</div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include 'includes/footer.php'?>
   
</body>

</html>

<script src="asserts/js/cart.js"></script>
<script src="asserts/js/header.js"></script>