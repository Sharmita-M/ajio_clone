<?php include 'includes/header.php'?>
<title>products page</title>


<div class="container">

    <div aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb_item text-secondary bg-transparent pt-4">
            <li class="breadcrumb-item"><a href="#" class="text-secondary text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">D2C Fashion</li>
        </ol>
    </div>
    <!-- accordion start -->

    <div class="row">

    <div class="container py-3 float-start col-md-2 h-100">
        <div class="accordion " id="parentAccordion">

            <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingRefineBy">
                    <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseRefineBy" aria-expanded="true" aria-controls="collapseRefineBy">
                        <strong>Refine By</strong>
                    </button>
                </h2>
                <div id="collapseRefineBy" class="accordion-collapse collapse show" aria-labelledby="headingRefineBy"
                    data-bs-parent="#parentAccordion">
                    <div class="accordion-body p-0">
                        <div class="accordion" id="refineAccordion">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingGender">
                                    <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseGender" aria-expanded="true"
                                        aria-controls="collapseGender">
                                        Gender
                                    </button>
                                </h2>
                                <div id="collapseGender" class="accordion-collapse collapse show"
                                    aria-labelledby="headingGender" data-bs-parent="#refineAccordion">
                                    <div class="accordion-body pt-2 pb-1">
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="checkbox" value="" id="womenCheck" />
                                            <label class="form-check-label gender-label checkbox-label"
                                                for="womenCheck">
                                                Women (12)
                                            </label>
                                        </div>
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="checkbox" value="" id="girlsCheck" />
                                            <label class="form-check-label gender-label checkbox-label"
                                                for="girlsCheck">
                                                Girls (03)
                                            </label>
                                        </div>
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="infantsCheck" />
                                            <label class="form-check-label gender-label checkbox-label"
                                                for="infantsCheck">
                                                Infants (08)
                                            </label>
                                        </div>
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="checkbox" value="" id="menCheck" />
                                            <label class="form-check-label gender-label checkbox-label" for="menCheck">
                                                Men (05)
                                            </label>
                                        </div>
                                        <div class="form-check mb-1">
                                            <input class="form-check-input" type="checkbox" value="" id="boysCheck" />
                                            <label class="form-check-label gender-label checkbox-label" for="boysCheck">
                                                Boys (01)
                                            </label>
                                        </div>
                                        <div class="more-text">MORE</div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingCategory">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseCategory" aria-expanded="false"
                                        aria-controls="collapseCategory">
                                        Category
                                    </button>
                                </h2>
                                <div id="collapseCategory" class="accordion-collapse collapse"
                                    aria-labelledby="headingCategory" data-bs-parent="#refineAccordion">
                                    <div class="accordion-body"></div>
                                </div>
                            </div>

                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingPrice">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsePrice" aria-expanded="false"
                                        aria-controls="collapsePrice">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapsePrice" class="accordion-collapse collapse"
                                    aria-labelledby="headingPrice" data-bs-parent="#refineAccordion">
                                    <div class="accordion-body"></div>
                                </div>
                            </div>

                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingBrands">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseBrands" aria-expanded="false"
                                        aria-controls="collapseBrands">
                                        Brands
                                    </button>
                                </h2>
                                <div id="collapseBrands" class="accordion-collapse collapse"
                                    aria-labelledby="headingBrands" data-bs-parent="#refineAccordion">
                                    <div class="accordion-body"></div>
                                </div>
                            </div>

                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingOccasion">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOccasion" aria-expanded="false"
                                        aria-controls="collapseOccasion">
                                        Occasion
                                    </button>
                                </h2>
                                <div id="collapseOccasion" class="accordion-collapse collapse"
                                    aria-labelledby="headingOccasion" data-bs-parent="#refineAccordion">
                                    <div class="accordion-body"></div>
                                </div>
                            </div>

                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingDiscount">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseDiscount" aria-expanded="false"
                                        aria-controls="collapseDiscount">
                                        Discount
                                    </button>
                                </h2>
                                <div id="collapseDiscount" class="accordion-collapse collapse"
                                    aria-labelledby="headingDiscount" data-bs-parent="#refineAccordion">
                                    <div class="accordion-body"></div>
                                </div>
                            </div>

                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingColors">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseColors" aria-expanded="false"
                                        aria-controls="collapseColors">
                                        Colors
                                    </button>
                                </h2>
                                <div id="collapseColors" class="accordion-collapse collapse"
                                    aria-labelledby="headingColors" data-bs-parent="#refineAccordion">
                                    <div class="accordion-body"></div>
                                </div>
                            </div>

                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingSizeFit">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSizeFit" aria-expanded="false"
                                        aria-controls="collapseSizeFit">
                                        Size &amp; Fit
                                    </button>
                                </h2>
                                <div id="collapseSizeFit" class="accordion-collapse collapse"
                                    aria-labelledby="headingSizeFit" data-bs-parent="#refineAccordion">
                                    <div class="accordion-body"></div>
                                </div>
                            </div>

                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingTags">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTags" aria-expanded="false"
                                        aria-controls="collapseTags">
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
                                        data-bs-target="#collapseRating" aria-expanded="false"
                                        aria-controls="collapseRating">
                                        Rating
                                    </button>
                                </h2>
                                <div id="collapseRating" class="accordion-collapse collapse"
                                    aria-labelledby="headingRating" data-bs-parent="#refineAccordion">
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

    <div class="col-md-9 float-end">

        <div class="container border-bottom pb-3">
            <h1 class="text-center fw-normal py-4" style="font-size: 1.875rem;">
                50 To 90 Percent Off
            </h1>
            <div class="d-flex border-top pt-3 align-items-center">
                <strong class="text-dark">09 Items Found</strong>
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

        <!-- 1st row prodyct -->
        <div class="container">
            <div class="row text-center">
                <!-- Product 1 -->
                <div class="col-12 col-sm-4 position-relative mb-4" onclick="window.location.href='product_detail.php'">
                    <div class="label label-bestseller">BESTSELLER</div>
                    <img src="asserts/images/product_page_images/product_grid_img/maroon_shirt.avif"
                        alt="Nivea Soft Light Moisturiser jar open and closed on white background"
                        class="img-fluid mx-auto d-block " />
                    <h3 class="text-uppercase text-warning fw-semibold mt-3"
                        style="font-family: Georgia, serif; font-size: 13px;">
                        NIVEA
                    </h3>
                    <p class="mb-1">Soft Light Moisturiser</p>
                    <div class="d-inline-flex align-items-center justify-content-center bg-success text-white rounded px-3 py-1 fw-semibold mx-auto"
                        style="font-size: 14px; user-select:none;">
                        4.3 <i class="fas fa-star ms-1"></i> | 1K
                    </div>
                    <p class="fw-semibold mt-2 mb-0" style="font-size: 14px;">
                        ₹325
                        <span class="text-muted text-decoration-line-through ms-1">₹650</span>
                        <span class="text-warning ms-1" style="font-size: 12px;">(50% off)</span>
                    </p>
                    <p class="text-success fw-semibold mt-1 d-flex justify-content-center align-items-center gap-1"
                        style="font-size: 13px;">
                        <i class="fas fa-percent"></i> Offer Price: ₹286
                    </p>
                </div>
                <!-- Product 2 -->
                <div class="col-12 col-sm-4 position-relative mb-4">
                    <div class="label label-bestseller">BESTSELLER</div>
                    <img src="asserts/images/product_page_images/product_grid_img/oversized_tshirt.avif"
                        alt="Woman wearing blue floral flared kurta set with dupatta standing indoors with stairs and curtain background"
                        class="img-fluid mx-auto d-block" />
                    <h3 class="text-warning fw-semibold mt-3" style="font-family: Georgia, serif; font-size: 13px;">
                        Kiana House Of Fashion
                    </h3>
                    <p class="mb-1">Women Floral Flared Kurta Set</p>
                    <div class="d-inline-flex align-items-center justify-content-center bg-danger text-white rounded px-3 py-1 fw-semibold mx-auto"
                        style="font-size: 14px; user-select:none;">
                        2.6 <i class="fas fa-star ms-1"></i> | 219
                    </div>
                    <p class="fw-semibold mt-2 mb-0" style="font-size: 14px;">
                        ₹719
                        <span class="text-muted text-decoration-line-through ms-1">₹2,398</span>
                        <span class="text-warning ms-1" style="font-size: 12px;">(70% off)</span>
                    </p>
                    <p class="text-success fw-semibold mt-1 d-flex justify-content-center align-items-center gap-1"
                        style="font-size: 13px;">
                        <i class="fas fa-percent"></i> Offer Price: ₹503
                    </p>
                </div>
                <!-- Product 3 -->
                <div class="col-12 col-sm-4 position-relative mb-4">
                    <div class="label label-ad">AD</div>
                    <img src="asserts/images/product_page_images/product_grid_img/nike_shoes.avif"
                        alt="Top view of pair of black and orange ASICS running shoes on white background"
                        class="img-fluid mx-auto d-block" />
                    <h3 class="text-uppercase text-warning fw-semibold mt-3"
                        style="font-family: Georgia, serif; font-size: 13px;">
                        ASICS
                    </h3>
                    <p class="mb-1">Men Gt-2000 12 Running Shoes</p>
                    <div class="d-inline-flex align-items-center justify-content-center bg-success text-white rounded px-3 py-1 fw-semibold mx-auto"
                        style="font-size: 14px; user-select:none;">
                        3.1 <i class="fas fa-star ms-1"></i> | 9
                    </div>
                    <p class="fw-semibold mt-2 mb-0" style="font-size: 14px;">
                        ₹9,489
                        <span class="text-muted text-decoration-line-through ms-1">₹12,999</span>
                        <span class="text-warning ms-1" style="font-size: 12px;">(27% off)</span>
                    </p>
                    <p class="text-success fw-semibold mt-1 d-flex justify-content-center align-items-center gap-1"
                        style="font-size: 13px;">
                        <i class="fas fa-percent"></i> Offer Price: ₹8,489
                    </p>
                </div>
            </div>
        </div>

        <!-- 2nd row product -->
        <div class="container">
            <div class="row text-center">
                <!-- Product 1 -->
                <div class="col-12 col-sm-4 position-relative mb-4">
                    <div class="label label-bestseller">BESTSELLER</div>
                    <img src="asserts/images/product_page_images/product_grid_img/maroon_shirt.avif"
                        alt="Nivea Soft Light Moisturiser jar open and closed on white background"
                        class="img-fluid mx-auto d-block " />
                    <h3 class="text-uppercase text-warning fw-semibold mt-3"
                        style="font-family: Georgia, serif; font-size: 13px;">
                        NIVEA
                    </h3>
                    <p class="mb-1">Soft Light Moisturiser</p>
                    <div class="d-inline-flex align-items-center justify-content-center bg-success text-white rounded px-3 py-1 fw-semibold mx-auto"
                        style="font-size: 14px; user-select:none;">
                        4.3 <i class="fas fa-star ms-1"></i> | 1K
                    </div>
                    <p class="fw-semibold mt-2 mb-0" style="font-size: 14px;">
                        ₹325
                        <span class="text-muted text-decoration-line-through ms-1">₹650</span>
                        <span class="text-warning ms-1" style="font-size: 12px;">(50% off)</span>
                    </p>
                    <p class="text-success fw-semibold mt-1 d-flex justify-content-center align-items-center gap-1"
                        style="font-size: 13px;">
                        <i class="fas fa-percent"></i> Offer Price: ₹286
                    </p>
                </div>
                <!-- Product 2 -->
                <div class="col-12 col-sm-4 position-relative mb-4">
                    <div class="label label-bestseller">BESTSELLER</div>
                    <img src="asserts/images/product_page_images/product_grid_img/oversized_tshirt.avif"
                        alt="Woman wearing blue floral flared kurta set with dupatta standing indoors with stairs and curtain background"
                        class="img-fluid mx-auto d-block" />
                    <h3 class="text-warning fw-semibold mt-3" style="font-family: Georgia, serif; font-size: 13px;">
                        Kiana House Of Fashion
                    </h3>
                    <p class="mb-1">Women Floral Flared Kurta Set</p>
                    <div class="d-inline-flex align-items-center justify-content-center bg-danger text-white rounded px-3 py-1 fw-semibold mx-auto"
                        style="font-size: 14px; user-select:none;">
                        2.6 <i class="fas fa-star ms-1"></i> | 219
                    </div>
                    <p class="fw-semibold mt-2 mb-0" style="font-size: 14px;">
                        ₹719
                        <span class="text-muted text-decoration-line-through ms-1">₹2,398</span>
                        <span class="text-warning ms-1" style="font-size: 12px;">(70% off)</span>
                    </p>
                    <p class="text-success fw-semibold mt-1 d-flex justify-content-center align-items-center gap-1"
                        style="font-size: 13px;">
                        <i class="fas fa-percent"></i> Offer Price: ₹503
                    </p>
                </div>
                <!-- Product 3 -->
                <div class="col-12 col-sm-4 position-relative mb-4">
                    <div class="label label-ad">AD</div>
                    <img src="asserts/images/product_page_images/product_grid_img/nike_shoes.avif"
                        alt="Top view of pair of black and orange ASICS running shoes on white background"
                        class="img-fluid mx-auto d-block" />
                    <h3 class="text-uppercase text-warning fw-semibold mt-3"
                        style="font-family: Georgia, serif; font-size: 13px;">
                        ASICS
                    </h3>
                    <p class="mb-1">Men Gt-2000 12 Running Shoes</p>
                    <div class="d-inline-flex align-items-center justify-content-center bg-success text-white rounded px-3 py-1 fw-semibold mx-auto"
                        style="font-size: 14px; user-select:none;">
                        3.1 <i class="fas fa-star ms-1"></i> | 9
                    </div>
                    <p class="fw-semibold mt-2 mb-0" style="font-size: 14px;">
                        ₹9,489
                        <span class="text-muted text-decoration-line-through ms-1">₹12,999</span>
                        <span class="text-warning ms-1" style="font-size: 12px;">(27% off)</span>
                    </p>
                    <p class="text-success fw-semibold mt-1 d-flex justify-content-center align-items-center gap-1"
                        style="font-size: 13px;">
                        <i class="fas fa-percent"></i> Offer Price: ₹8,489
                    </p>
                </div>
            </div>
        </div>

        <!-- 3rd row product -->
        <div class="container">
            <div class="row text-center">
                <!-- Product 1 -->
                <div class="col-12 col-sm-4 position-relative mb-4">
                    <div class="label label-bestseller">BESTSELLER</div>
                    <img src="asserts/images/product_page_images/product_grid_img/maroon_shirt.avif"
                        alt="Nivea Soft Light Moisturiser jar open and closed on white background"
                        class="img-fluid mx-auto d-block " />
                    <h3 class="text-uppercase text-warning fw-semibold mt-3"
                        style="font-family: Georgia, serif; font-size: 13px;">
                        NIVEA
                    </h3>
                    <p class="mb-1">Soft Light Moisturiser</p>
                    <div class="d-inline-flex align-items-center justify-content-center bg-success text-white rounded px-3 py-1 fw-semibold mx-auto"
                        style="font-size: 14px; user-select:none;">
                        4.3 <i class="fas fa-star ms-1"></i> | 1K
                    </div>
                    <p class="fw-semibold mt-2 mb-0" style="font-size: 14px;">
                        ₹325
                        <span class="text-muted text-decoration-line-through ms-1">₹650</span>
                        <span class="text-warning ms-1" style="font-size: 12px;">(50% off)</span>
                    </p>
                    <p class="text-success fw-semibold mt-1 d-flex justify-content-center align-items-center gap-1"
                        style="font-size: 13px;">
                        <i class="fas fa-percent"></i> Offer Price: ₹286
                    </p>
                </div>
                <!-- Product 2 -->
                <div class="col-12 col-sm-4 position-relative mb-4">
                    <div class="label label-bestseller">BESTSELLER</div>
                    <img src="asserts/images/product_page_images/product_grid_img/oversized_tshirt.avif"
                        alt="Woman wearing blue floral flared kurta set with dupatta standing indoors with stairs and curtain background"
                        class="img-fluid mx-auto d-block" />
                    <h3 class="text-warning fw-semibold mt-3" style="font-family: Georgia, serif; font-size: 13px;">
                        Kiana House Of Fashion
                    </h3>
                    <p class="mb-1">Women Floral Flared Kurta Set</p>
                    <div class="d-inline-flex align-items-center justify-content-center bg-danger text-white rounded px-3 py-1 fw-semibold mx-auto"
                        style="font-size: 14px; user-select:none;">
                        2.6 <i class="fas fa-star ms-1"></i> | 219
                    </div>
                    <p class="fw-semibold mt-2 mb-0" style="font-size: 14px;">
                        ₹719
                        <span class="text-muted text-decoration-line-through ms-1">₹2,398</span>
                        <span class="text-warning ms-1" style="font-size: 12px;">(70% off)</span>
                    </p>
                    <p class="text-success fw-semibold mt-1 d-flex justify-content-center align-items-center gap-1"
                        style="font-size: 13px;">
                        <i class="fas fa-percent"></i> Offer Price: ₹503
                    </p>
                </div>
                <!-- Product 3 -->
                <div class="col-12 col-sm-4 position-relative mb-4" onclick="window.location.href='product_detail.php'">
                    <div class="label label-ad">AD</div>
                    <img src="asserts/images/product_page_images/product_grid_img/nike_shoes.avif"
                        alt="Top view of pair of black and orange ASICS running shoes on white background"
                        class="img-fluid mx-auto d-block" />
                    <h3 class="text-uppercase text-warning fw-semibold mt-3"
                        style="font-family: Georgia, serif; font-size: 13px;">
                        ASICS
                    </h3>
                    <p class="mb-1">Men Gt-2000 12 Running Shoes</p>
                    <div class="d-inline-flex align-items-center justify-content-center bg-success text-white rounded px-3 py-1 fw-semibold mx-auto"
                        style="font-size: 14px; user-select:none;">
                        3.1 <i class="fas fa-star ms-1"></i> | 9
                    </div>
                    <p class="fw-semibold mt-2 mb-0" style="font-size: 14px;">
                        ₹9,489
                        <span class="text-muted text-decoration-line-through ms-1">₹12,999</span>
                        <span class="text-warning ms-1" style="font-size: 12px;">(27% off)</span>
                    </p>
                    <p class="text-success fw-semibold mt-1 d-flex justify-content-center align-items-center gap-1"
                        style="font-size: 13px;">
                        <i class="fas fa-percent"></i> Offer Price: ₹8,489
                    </p>
                </div>
            </div>
        </div>

    </div>

    </div>

</div>

<?php include 'includes/footer.php'?>