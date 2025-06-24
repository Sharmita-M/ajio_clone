
<?php include 'includes/header.php'?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>products page</title>
  <link rel="stylesheet" href="asserts/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

</head>

<body>
 
 
<div class="container">

  <div aria-label="breadcrumb" >
    <ol class="breadcrumb breadcrumb_item text-secondary bg-transparent pt-4">
      <li class="breadcrumb-item"><a href="#" class="text-secondary text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">D2C Fashion</li>
    </ol>
  </div>
  <!-- accordion start -->

  <div class="container py-3 float-start" style="max-width: 300px;">
    <div class="accordion " id="parentAccordion">

      <div class="accordion-item border-0">
        <h2 class="accordion-header" id="headingRefineBy">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRefineBy"
            aria-expanded="true" aria-controls="collapseRefineBy">
            <strong>Refine By</strong>
          </button>
        </h2>
        <div id="collapseRefineBy" class="accordion-collapse collapse show" aria-labelledby="headingRefineBy"
          data-bs-parent="#parentAccordion">
          <div class="accordion-body p-0">
            <div class="accordion" id="refineAccordion">
              <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingGender">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseGender" aria-expanded="true" aria-controls="collapseGender">
                    Gender
                  </button>
                </h2>
                <div id="collapseGender" class="accordion-collapse collapse show" aria-labelledby="headingGender"
                  data-bs-parent="#refineAccordion">
                  <div class="accordion-body pt-2 pb-1">
                    <div class="form-check mb-1">
                      <input class="form-check-input" type="checkbox" value="" id="womenCheck" />
                      <label class="form-check-label gender-label checkbox-label" for="womenCheck">
                        Women (1,229,834)
                      </label>
                    </div>
                    <div class="form-check mb-1">
                      <input class="form-check-input" type="checkbox" value="" id="girlsCheck" />
                      <label class="form-check-label gender-label checkbox-label" for="girlsCheck">
                        Girls (93,314)
                      </label>
                    </div>
                    <div class="form-check mb-1">
                      <input class="form-check-input" type="checkbox" value="" id="infantsCheck" />
                      <label class="form-check-label gender-label checkbox-label" for="infantsCheck">
                        Infants (18,267)
                      </label>
                    </div>
                    <div class="form-check mb-1">
                      <input class="form-check-input" type="checkbox" value="" id="menCheck" />
                      <label class="form-check-label gender-label checkbox-label" for="menCheck">
                        Men (3,902)
                      </label>
                    </div>
                    <div class="form-check mb-1">
                      <input class="form-check-input" type="checkbox" value="" id="boysCheck" />
                      <label class="form-check-label gender-label checkbox-label" for="boysCheck">
                        Boys (233)
                      </label>
                    </div>
                    <div class="more-text">MORE</div>
                  </div>
                </div>
              </div>

              <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingCategory">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                    Category
                  </button>
                </h2>
                <div id="collapseCategory" class="accordion-collapse collapse" aria-labelledby="headingCategory"
                  data-bs-parent="#refineAccordion">
                  <div class="accordion-body"></div>
                </div>
              </div>

              <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingPrice">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsePrice" aria-expanded="false" aria-controls="collapsePrice">
                    Price
                  </button>
                </h2>
                <div id="collapsePrice" class="accordion-collapse collapse" aria-labelledby="headingPrice"
                  data-bs-parent="#refineAccordion">
                  <div class="accordion-body"></div>
                </div>
              </div>

              <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingBrands">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseBrands" aria-expanded="false" aria-controls="collapseBrands">
                    Brands
                  </button>
                </h2>
                <div id="collapseBrands" class="accordion-collapse collapse" aria-labelledby="headingBrands"
                  data-bs-parent="#refineAccordion">
                  <div class="accordion-body"></div>
                </div>
              </div>

              <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingOccasion">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOccasion" aria-expanded="false" aria-controls="collapseOccasion">
                    Occasion
                  </button>
                </h2>
                <div id="collapseOccasion" class="accordion-collapse collapse" aria-labelledby="headingOccasion"
                  data-bs-parent="#refineAccordion">
                  <div class="accordion-body"></div>
                </div>
              </div>

              <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingDiscount">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseDiscount" aria-expanded="false" aria-controls="collapseDiscount">
                    Discount
                  </button>
                </h2>
                <div id="collapseDiscount" class="accordion-collapse collapse" aria-labelledby="headingDiscount"
                  data-bs-parent="#refineAccordion">
                  <div class="accordion-body"></div>
                </div>
              </div>

              <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingColors">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseColors" aria-expanded="false" aria-controls="collapseColors">
                    Colors
                  </button>
                </h2>
                <div id="collapseColors" class="accordion-collapse collapse" aria-labelledby="headingColors"
                  data-bs-parent="#refineAccordion">
                  <div class="accordion-body"></div>
                </div>
              </div>

              <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingSizeFit">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSizeFit" aria-expanded="false" aria-controls="collapseSizeFit">
                    Size &amp; Fit
                  </button>
                </h2>
                <div id="collapseSizeFit" class="accordion-collapse collapse" aria-labelledby="headingSizeFit"
                  data-bs-parent="#refineAccordion">
                  <div class="accordion-body"></div>
                </div>
              </div>

              <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingTags">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTags" aria-expanded="false" aria-controls="collapseTags">
                    Tags
                  </button>
                </h2>
                <div id="collapseTags" class="accordion-collapse collapse" aria-labelledby="headingTags"
                  data-bs-parent="#refineAccordion">
                  <div class="accordion-body"></div>
                </div>
              </div>

              <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingRating">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseRating" aria-expanded="false" aria-controls="collapseRating">
                    Rating
                  </button>
                </h2>
                <div id="collapseRating" class="accordion-collapse collapse" aria-labelledby="headingRating"
                  data-bs-parent="#refineAccordion">
                  <div class="accordion-body"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion-item mt-3 border-0">
        <h2 class="accordion-header" id="headingMoreFilters">
          <button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseMoreFilters" aria-expanded="true" aria-controls="collapseMoreFilters">
            More Filters
          </button>
        </h2>
        <div id="collapseMoreFilters" class="accordion-collapse collapse" aria-labelledby="headingMoreFilters"
          data-bs-parent="#parentAccordion">
          <div class="accordion-body pt-2">
            <p class="more-filters-text mb-2">
              Please select upto 3 categories to view more filters
            </p>
            <button type="button" class="btn-select-category" aria-label="Select Category">
              SELECT CATEGORY
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container border-bottom pb-3">
    <h1 class="text-center fw-normal py-4" style="font-size: 1.875rem;">
      50 To 90 Percent Off
    </h1>
    <div class="d-flex border-top pt-3 align-items-center">
      <strong class="text-dark">1,341,207 Items Found</strong>
      <div class="d-flex flex-grow-1 justify-content-center gap-4">
        <div class="d-flex align-items-center gap-2">
          <span class="uppercase-gray">Grid</span>
          <div class="d-flex gap-1">
            <div class="grid-box grid-medium"></div>
            <div class="grid-box grid-medium"></div>
            <div class="grid-box grid-dark"></div>
            <div class="grid-box grid-light"></div>
            <div class="grid-box grid-light"></div>
            <div class="grid-box grid-light"></div>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center gap-2">
        <span class="uppercase-gray">Sort by</span>
        <select class="form-select" aria-label="Sort by">
          <option selected>Relevance</option>
          <option>Price: Low to High</option>
          <option>Price: High to Low</option>
          <option>Newest</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row g-4 mt-1">
    <!-- Product 1 -->
    <div class="col-12 col-sm-6 col-lg-4 position-relative product-card">
      <div class="position-relative">
        <img src="https://storage.googleapis.com/a1aa/image/934014fe-1146-446c-d155-4cca4a5fb592.jpg"
          alt="U.S. Polo Assn. Women High-Rise Straight Fit Jeans front view on model wearing red top and white shoes" />
        <div class="quick-view">QUICK VIEW</div>
      </div>
      <div class="product-brand mt-1">U.S. Polo Assn.</div>
      <div class="product-name">Women High-Rise Straight Fit Jeans</div>
      <div class="rating">4.3★ | 27</div>
      <div class="price mt-1">
        <span class="original">₹1,347</span>
        <span class="fw-semibold ms-1">₹743</span>
        <span class="discount">(45% off)</span>
      </div>
      <div class="offer-price mt-1">
        <i class="fas fa-circle"></i> Offer Price: ₹1,091
      </div>
    </div>
    <!-- Product 2 -->
    <div class="col-12 col-sm-6 col-lg-4 product-card">
      <img src="https://storage.googleapis.com/a1aa/image/9594baed-4983-4c4e-3318-03e7a633ec9e.jpg"
        alt="SPYKAR Men Low-Rise Skinny Fit Jeans front view on model wearing red top and white shoes" />
      <div class="product-brand mt-1">SPYKAR</div>
      <div class="product-name">Men Low-Rise Skinny Fit Jeans</div>
      <div class="rating">3.4★ | 136</div>
      <div class="price mt-1">
        <span class="original">₹1,794</span>
        <span class="fw-semibold ms-1">₹899</span>
        <span class="discount">(54% off)</span>
      </div>
      <div class="offer-price mt-1">
        <i class="fas fa-circle"></i> Offer Price: ₹1,435
      </div>
    </div>
    <!-- Product 3 -->
    <div class="col-12 col-sm-6 col-lg-4 product-card">
      <img src="https://storage.googleapis.com/a1aa/image/3a02d343-1f64-4784-c0e6-7435ef450c85.jpg"
        alt="U.S. Polo Assn. Women High-Rise Wide-Leg Jeans front view on model wearing green top and white shoes" />
      <div class="product-brand mt-1">U.S. Polo Assn.</div>
      <div class="product-name">Women High-Rise Wide-Leg Jeans</div>
      <div class="rating">3.7★ | 28</div>
      <div class="price mt-1">
        <span class="original">₹1,512</span>
        <span class="fw-semibold ms-1">₹746</span>
        <span class="discount">(45% off)</span>
      </div>
      <div class="offer-price mt-1">
        <i class="fas fa-circle"></i> Offer Price: ₹1,225
      </div>
    </div>
    <!-- Product 4 -->
    <div class="col-12 col-sm-6 col-lg-4 position-relative product-card">
      <div class="position-relative">
        <img src="https://storage.googleapis.com/a1aa/image/7f6174c0-60cc-4eef-7079-b9168db30b77.jpg"
          alt="U.S. Polo Assn. Women Heavy-Wash Wide-Leg Jeans front view on model wearing pink top and white shoes" />
        <div class="bestseller-badge">BESTSELLER</div>
      </div>
      <div class="product-brand mt-1">U.S. Polo Assn.</div>
      <div class="product-name">Women Heavy-Wash Wide-Leg Jeans</div>
      <div class="rating">3.8★ | 188</div>
      <div class="price mt-1">
        <span class="original">₹1,402</span>
        <span class="fw-semibold ms-1">₹229</span>
        <span class="discount">(39% off)</span>
      </div>
      <div class="offer-price mt-1">
        <i class="fas fa-circle"></i> Offer Price: ₹1,206
      </div>
    </div>
    <!-- Product 5 -->
    <div class="col-12 col-sm-6 col-lg-4 product-card">
      <img src="https://storage.googleapis.com/a1aa/image/a7accd50-2e05-4124-7745-23f2e3053d33.jpg"
        alt="U.S. Polo Assn. Women High-Rise Bootcut Jeans front view on model wearing white shoes" />
      <div class="product-brand mt-1">U.S. Polo Assn.</div>
      <div class="product-name">Women High-Rise Bootcut Jeans</div>
      <div class="rating">3.6★ | 58</div>
      <div class="price mt-1">
        <span class="original">₹1,483</span>
        <span class="fw-semibold ms-1">₹399</span>
        <span class="discount">(47% off)</span>
      </div>
      <div class="offer-price mt-1">
        <i class="fas fa-circle"></i> Offer Price: ₹1,275
      </div>
    </div>
    <!-- Product 6 -->
    <div class="col-12 col-sm-6 col-lg-4 position-relative product-card">
      <div class="position-relative">
        <img src="https://storage.googleapis.com/a1aa/image/e1768911-003f-4042-16f3-dbdcb1f2b1a0.jpg"
          alt="U.S. Polo Assn. Boys Lightly Washed Slim Fit Jeans front view" />
        <div class="ad-badge">AD</div>
      </div>
      <div class="product-brand mt-1">U.S. Polo Assn.</div>
      <div class="product-name">Boys Lightly Washed Slim Fit Jeans</div>
      <div class="rating">4★ | 13</div>
      <div class="price mt-1">
        <span class="original">₹1,300</span>
        <span class="fw-semibold ms-1">₹599</span>
        <span class="discount">(50% off)</span>
      </div>
      <div class="offer-price mt-1">
        <i class="fas fa-circle"></i> Offer Price: ₹1,040
      </div>
    </div>

  </div>
  </div>
  </div>

</div>
<?php include 'includes/footer.php'?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>