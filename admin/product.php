<?php include 'includes/header.php'; 
$id= $_REQUEST['id'] ?? '';

if(!empty($id)){
  $result = $db->query(" SELECT * FROM `product` WHERE `id` = '$id' ");
  $cate = $result->fetch_object();
};

if (!empty($_SESSION['errorMsg'])):
    $alertClass = $_SESSION['errorStatus'] === 'success' ? 'alert-success' : 'alert-danger';
?>
<div id="sessionAlert" class="alert <?= $alertClass ?> alert-dismissible fade show position-absolute top-0 start-0 w-100 text-center z-3" role="alert">
  <?= $_SESSION['errorMsg']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
    unset($_SESSION['errorMsg'], $_SESSION['errorStatus']);
endif;
?>
 <div class="flex-grow-1 container-fluid mt-5">
  <h2 class="section-title text-center">📝 Product Management</h2>

  <!-- Add Testimonial Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add New Product</div>
    <div class="card-body">
      <form method ="POST" action="manage/manage-product.php" enctype="multipart/form-data">
         <div class="row">
        <!-- Select Category -->
        <div class="col-md-4 mb-3">
          <label for="categorySelect" class="form-label">Select Category</label>
          <select id="categorySelect" class="form-select" name="categoryId">
            <option selected disabled>Select</option>
            <?php 
        $cates = $db-> query("SELECT * FROM `product_categories` ORDER BY `pc_id` ASC");
        while($newCate = $cates-> fetch_object()){?>
          <option value="<?= $newCate->pc_id;?>"><?= $newCate->pc_name;?></option>
          <?php };?>
        </select>

        </div>
        <!-- Select Sub-category -->
        <div class="col-md-4 mb-3">
          <label for="subCategorySelect" class="form-label">Select Sub-category</label>
          <select id="subCategorySelect" class="form-select" name="sub_cateId">
  <option selected disabled>Select</option>
  <?php 
    $subs = $db->query("SELECT * FROM `product_subcategory` ORDER BY `psc_name` ASC");
    while($sub = $subs->fetch_object()) {
  ?>
    <option data-cat="<?= $sub->pc_id ?>" value="<?= $sub->psc_id ?>">
      <?= $sub->psc_name ?>
    </option>
  <?php } ?>
</select>

        </div>

        <!-- Product Name -->
        <div class="col-md-4 mb-3">
          <label for="productName" class="form-label">Product Name</label>
          <input type="text" name="pName" id="productName" class="form-control" placeholder="Name" value="<?= $cate->product_name ?? '';?>">
        </div>
      </div>
      <div class="row">
      <div class="col-md-4 mb-3">
          <label for="Size" class="form-label">Size</label>
          <input type="text" id="Size" name="size" class="form-control" placeholder="Size available" value="<?= $cate->size_available ?? '';?>">
        </div>
        <div class="col-md-4 mb-3">
          <label for="Color" class="form-label">Color</label>
          <input type="text" id="Color" name="color" class="form-control" placeholder="Color available" value="<?= $cate->color_available ?? '';?>">
        </div>
        <div class="col-md-4 mb-3">
          <label for="Stock" class="form-label">Stock</label>
          <input type="text" id="Stock" name="stock" class="form-control" placeholder="Stock available" value="<?= $cate->stock ?? '';?>">
        </div>
        </div>

      <div class="row">
        <!-- Selling Price -->
        <div class="col-md-4 mb-3">
          <label for="sellingPrice" class="form-label">Selling Price</label>
          <input type="text" id="sellingPrice" name="sellingPrice" class="form-control" placeholder="Price" value="<?= $cate->product_selling_price ?? '';?>">
        </div>

        <!-- Market Price -->
        <div class="col-md-4 mb-3">
          <label for="marketPrice" class="form-label">Market Price</label>
          <input type="text" id="marketPrice" name="marketPrice" class="form-control" placeholder="Market Price" value="<?= $cate->product_market_price ?? '';?>">
        </div>


        <!-- Image Upload -->
        <div class="col-md-4 mb-3">
          <label for="productImage" class="form-label">Image</label>
          <input type="file" id="productImage" name="image" class="form-control" value="<?= $cate->product_image ?? '';?>">
        </div>
      </div>
        <div class="mb-3">
          <label for="testimonialText" class="form-label">Catagory Description</label>
          <textarea name="description" id="testimonialText" rows="6" class="form-control testimonial-content"><?= $cate->product_long_description ?? '';?></textarea>
        </div>
        <?php if(!empty($id)){ ?>
          <input type="hidden" name="edit_id" value="<?= $cate->id ?? '';?>">
        <button type="update" name="action" value="update" class="btn btn-theme w-100">Update Product</button>

<?php } else { ?>
        <button type="submit" name="action" value="submit" class="btn btn-theme w-100">Add Product</button>
<?php } ?>
      </form>
    </div>
  </div>   

<div class="card">
  <div class="gradient-header bg-primary text-white fw-semibold">
    View Category
  </div>
  <div class="card-body table-responsive">
    <table class="table table-bordered align-middle text-center">
      <thead class="table-light">
        <tr>
          <th>Sl No</th>
          <th>Action</th>
          <th>Category Name</th>
          <th>Sub-category Name</th>
          <th>Product Name</th>
          <th>Size</th>
          <th>Color</th>
          <th>Stock</th>
          <th>Market Price</th>
          <th>Selling Price</th>
          <th>Description</th>
          <th>Image</th>
          <th>Date Of Add</th>
        </tr>
      </thead>
      <tbody>
       <?php
$i = 1;
$query = $db->query("
SELECT 
    p.*, 
    ps.psc_name, 
    pc.pc_name 
  FROM `product` p
  JOIN `product_subcategory` ps ON p.psc_id = ps.psc_id
  JOIN `product_categories` pc ON p.pc_id = pc.pc_id
  ORDER BY p.id DESC
");

while ($row = $query->fetch_object()) {
?>
  <tr>
    <td><?= $i++; ?></td>
    <td class="text-start">
      <button onclick="location.href='?id=<?= $row->id; ?>'" class="btn btn-sm btn-outline-primary">Edit</button>
      <button onclick="location.href='manage/manage-product.php?action=delete&id=<?= $row->id; ?>'" class="btn btn-sm btn-outline-danger">Delete</button>
    </td>
    <td><?= $row->pc_name; ?></td>
    <td><?= $row->psc_name; ?></td> 
    <td><?= $row->product_name; ?></td>   
    <td><?= $row->size_available; ?></td>   
    <td><?= $row->color_available; ?></td>   
    <td><?= $row->stock; ?></td>   
    <td><?= $row->product_market_price; ?></td>   
    <td><?= $row->product_selling_price; ?></td>   
    <td><?= $row->product_long_description; ?></td>
    <td>
      <?php if (!empty($row->product_image)) { ?>
        <img src="uploads/products/<?= $row->product_image; ?>" class="img-fluid" style="width: 50px;" alt="Product Image">
      <?php } else { ?>
        <span>No image</span>
      <?php } ?>
    </td>
    <td><?= $row->create_at; ?></td>
  </tr>
<?php } ?>

      </tbody>
    </table>
  </div>
</div>
</div>
<!-- CKEditor CDN -->
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<?php include 'includes/footer.php'; ?>
</div>

