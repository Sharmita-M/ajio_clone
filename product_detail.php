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
 <style>
    
  </style>
</head>
<body>
  <div class="container py-4">
    <!-- Breadcrumb -->
    <nav class="mb-4 text-secondary small fw-light">
      Home / Men / Western Wear / Shirts / Men Regular Fit Shirt
    </nav>
    <div class="d-flex flex-column flex-lg-row gap-4 justify-content-center">
      <!-- Left side: thumbnails and main image -->
      <div class="d-flex gap-3 justify-content-center">
        <div class="d-flex flex-column align-items-center">
          <button class="btn btn-link p-0 text-secondary" aria-label="Scroll up">
            <i class="fas fa-chevron-up"></i>
          </button>
          <div class="thumbs-container d-flex flex-column gap-3 my-2">
            <img src="https://storage.googleapis.com/a1aa/image/cdaf730d-70ac-4218-98f2-ba6207ed0850.jpg" alt="Front view of a man wearing a black regular fit shirt with collar and buttons, standing against a gray background" class="thumb-img" />
            <img src="https://storage.googleapis.com/a1aa/image/9a452835-e8c2-4773-e3d5-8d6ee6a5aba0.jpg" alt="Side view of a man wearing a black regular fit shirt with collar and buttons, standing against a gray background" class="thumb-img" />
            <img src="https://storage.googleapis.com/a1aa/image/342199cd-417f-406a-a8ee-e86723d7bf30.jpg" alt="Back view of a man wearing a black regular fit shirt with collar and buttons, standing against a gray background" class="thumb-img" />
            <img src="https://storage.googleapis.com/a1aa/image/9a452835-e8c2-4773-e3d5-8d6ee6a5aba0.jpg" alt="Side view of a man wearing a black regular fit shirt with collar and buttons, standing against a gray background" class="thumb-img" />
            <img src="https://storage.googleapis.com/a1aa/image/a84c432d-245c-45e7-753b-02a977019e8c.jpg" alt="Closeup view of a man wearing a black regular fit shirt with collar and buttons, standing against a gray background" class="thumb-img" />
          </div>
          <button class="btn btn-link p-0 text-secondary" aria-label="Scroll down">
            <i class="fas fa-chevron-down"></i>
          </button>
        </div>
        <div class="position-relative d-flex justify-content-center">
          <img src="https://storage.googleapis.com/a1aa/image/cdaf730d-70ac-4218-98f2-ba6207ed0850.jpg" alt="Front view of a man wearing a black regular fit shirt with collar and buttons, standing against a gray background" class="main-img" />
       
        </div>
      </div>
      <!-- Right side: product details -->
      <div class="text-center" style="max-width: 400px; margin: 0 auto;">
        <h2 class="mb-1" style="font-size: 14px; font-weight: 600; color: #a67c00;">U.S. POLO ASSN.</h2>
        <p class="mb-3" style="font-size: 14px; color: #212529;">Men Regular Fit Shirt</p>
        <p class="mb-1" style="font-size: 24px; font-weight: 600;">₹1,029</p>
        <p class="small-text-yellow mb-1">
          MRP <span>₹2,099</span> (51% OFF)
        </p>
        <p class="small-text-gray mb-4">Price inclusive of all taxes</p>
        <div class="d-flex offer-box rounded mx-auto">
          <div class="offer-left">
            <div style="padding-top: 12px;">Use Code<br /><strong>FREEDEL</strong></div>
            <div class="text-primary text-decoration-underline" style="font-size: 11px; cursor: pointer;">T&amp;C</div>
          </div>
          <div class="offer-right px-2">
            <div>Get it for <span style="color: #228B22;">₹1028</span></div>
            <div style="font-size: 11px; margin-top: 4px;">
              Free Shipping on 799 and above. Just for you. <a href="#" class="text-primary text-decoration-underline">View All Products&gt;</a>
            </div>
          </div>
        </div>
        <div class="mb-4">
          <p class="mb-1" style="font-size: 14px;">Black</p>
          <div class="color-circle"></div>
        </div>
        <div class="mb-3">
          <p class="mb-2" style="font-size: 14px;">Select Size</p>
          <div class="d-flex justify-content-center gap-2 mb-2 flex-wrap">
            <button type="button" class="btn size-btn">S</button>
            <button type="button" class="btn size-btn">M</button>
            <button type="button" class="btn size-btn">L</button>
            <button type="button" class="btn size-btn">XL</button>
            <button type="button" class="btn size-btn">XXL</button>
          </div>
          <div class="check-size d-flex justify-content-center align-items-center gap-1 text-primary" style="font-size: 12px; cursor: pointer; margin-bottom: 1.5rem;">
            <i class="fas fa-chart-bar"></i>
            <span>Check Size Chart</span>
          </div>
        </div>
        <div class="delivery-box d-flex align-items-center gap-2 mx-auto">
          <i class="fas fa-map-marker-alt"></i>
          <p class="m-0">Select your size to know your estimated delivery date.</p>
        </div>
        <button type="button" class="btn btn-add-bag w-100 mb-2 d-flex justify-content-center align-items-center gap-2 mx-auto">
          <i class="fas fa-shopping-bag"></i> ADD TO BAG
        </button>
        <p class="text-muted small mb-4" style="font-size: 11px;">HANDPICKED STYLES | ASSURED QUALITY</p>
        <button type="button" class="btn btn-wishlist w-100 d-flex justify-content-center align-items-center gap-2 mx-auto">
          <i class="far fa-heart"></i> SAVE TO WISHLIST
        </button>
      </div>
    </div>
  </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>