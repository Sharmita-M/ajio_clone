<?php include 'includes/header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Product Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="asserts/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-white text-gray-800">
    
    <div class="container-xl">
    <div class="container py-4">
        <div class="row">
            <!-- Product Section -->
            <div class="col-md-6">
                <!-- Breadcrumb -->
                <nav class="breadcrumb">
                    <a href="#" class="breadcrumb-item">Home</a>
                    <a href="#" class="breadcrumb-item">Women</a>
                    <a href="#" class="breadcrumb-item">Western Wear</a>
                    <a href="#" class="breadcrumb-item">Tshirts</a>
                    <span class="breadcrumb-item active">Women Striped Relaxed Fit </span>
                </nav>

                <div class="row whole">
                    <!-- Image Gallery -->
                    <div class="col-lg-2 d-flex flex-column align-items-center ms-">
                        <div class="thumbnail mb-2">
                            <img src="https://storage.googleapis.com/a1aa/image/fHZ0WhAULLkoFxt0LGqQM651VhzQ5lVd6U1PQjhtnPc.jpg" alt="Thumbnail of the product image 1">
                        </div>
                        <div class="thumbnail mb-2">
                            <img src="https://storage.googleapis.com/a1aa/image/D6xrLYkRAuyganL-x1X3_llVxfdlIgnuqIPVkZhMdzw.jpg" alt="Thumbnail of the product image 2">
                        </div>
                        <div class="thumbnail mb-2">
                            <img src="https://storage.googleapis.com/a1aa/image/lKRTyBtxdRb5fyr6nZS-FHqAeFCJaqu4zWmorGgFgTo.jpg" alt="Thumbnail of the product image 3">
                        </div>
                        <div class="thumbnail mb-2">
                            <img src="https://storage.googleapis.com/a1aa/image/d7sIZkiqy2qOF8y9_Qvx_54MPr27flO8Imz6dgI285I.jpg" alt="Thumbnail of the product image 4">
                        </div>
                        <div class="thumbnail mb-2">
                            <img src="https://storage.googleapis.com/a1aa/image/cI8Qgr1EGuTjmHtRtJmBlnwnhy-rL_QZlPu2pz4Xa30.jpg" alt="Thumbnail of the product image 5">
                        </div>
                    </div>

                    <!-- Main Image -->
                    <div class="col-lg-10 position-relative main-image">
                        <img src="https://storage.googleapis.com/a1aa/image/g7TI7Fajtuwww9UbEtKK2njBuWzaL2yhZEIHijCOrIs.jpg" alt="Main product image of a woman wearing a striped t-shirt">
                        <i class="fas fa-chevron-left chevron" style="left: 0;"></i>
                        <i class="fas fa-chevron-right chevron" style="right: 0;"></i>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="mt-4">
                    <div class="tabs d-flex">
                        <button class="active">RETURNS</button>
                        <button>OUR PROMISE</button>
                    </div>
                    <div class="tab-content mt-2">
                        <p class="text-muted">7 day Return and Exchange <a href="#" class="text-primary">click here.</a></p>
                    </div>
                </div>

                <!-- Service FAQs -->
                <div class="mt-4 text-right">
                    <a href="#" class="text-primary">Service FAQs</a>
                </div>
            </div>

            <!-- Paragraph Section -->
            <div class="col-md-6">
                <div class="product-page">
                    <h1 class="text-center fs-5 brand font-weight-bold small-text">WOMENSTER</h1>
                    <h2 class="text-center text-lg font-weight-medium small-text">Women Casual Top</h2>
                    <p class="text-center display-4 font-weight-bold mt-2 small-text fs-5">₹280</p>
                    <p class="text-center text-muted small-text"><del class="delprice">MRP ₹999</del> <span class="off">(72% OFF)</span></p>
                    <p class="text-center text-muted small-text">Price inclusive of all taxes</p>
                    <div class="offer-card">
                        <div class="offer-tag">
                            <div class="offer-label">Offer</div>
                            <div class="offer-code text-center">
                                <div>Use Code</div>
                                <div class="code">NEW125</div>
                                <div class="terms">T&C</div>
                            </div>
                        </div>
                        <div class="ml-3">
                            <div class="offer-price">Get it for ₹624</div>
                            <div class="offer-description">
                                Get Flat Rs 125 Off on cart value of 500 & Above. 
                                <a href="#">View All Products></a>
                            </div>
                        </div>
                    </div>
                    <p class="text-center text-primary mt-2 small-text">+7 More</p>
                    <div class="text-center mt-4">
                        <p class="font-weight-medium small-text">White</p>
                        <div class="color-circle bg-light mx-auto"></div>
                    </div>
                    <div class="text-center mt-4">
                        <p class="font-weight-medium small-text">Select Size</p>
                        <div class="d-flex justify-content-center mt-2">
                            <div class="size-btn small-text">S</div>
                            <div class="size-btn ml-2 small-text">M</div>
                            <div class="size-btn ml-2 small-text">L</div>
                            <div class="size-btn ml-2 small-text">XL</div>
                        </div>
                        <a href="#" class="text-primary mt-2 d-block smaller-text">Check Size Chart</a>
                    </div>
                    <div class="p-4 mt-4 text-center text-muted small-text">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="ml-2">Select your size to know your estimated delivery date.</span>
                    </div>
                    <button class="btn bag text-white w-100 py-2 mt-4 small-text">
                        <i class="fas fa-shopping-bag mr-2"></i> ADD TO BAG
                    </button>
                    <p class="text-center text-muted mt-2 smaller-text">HANDPICKED STYLES | ASSURED QUALITY</p>
                    <button class="btn wish w-100 py-2 mt-4 small-text">
                        <i class="fas fa-heart mr-2"></i> SAVE TO WISHLIST
                    </button>
                </div>  
        </div>
    </div>

    
    </div>

    <?php include 'includes/footer.php'?>

    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>