<?php include 'includes/header.php'; ?>

 <div class="flex-grow-1 container-fluid mt-5 mb-5">
  <h2 class="section-title text-center">📝 Category Management</h2>

  <!-- Add Testimonial Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add New Category</div>
    <div class="card-body">
      <form method ="POST" action="manage/manage-category.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="authorName" class="form-label"> Category Name</label>
          <input type="text" name="category"  class="form-control" id="authorName" placeholder="E.g. Men Jeans">
        </div>
        <div class="mb-3">
          <label for="bannerImage" class="form-label">Upload Image <small class="text-muted">(400x400)</small></label>
          <input class="form-control" name="image" type="file" id="bannerImage">
        </div>
        <div class="mb-3">
          <label for="testimonialText" class="form-label">Catagory Description</label>
          <textarea name="description" id="testimonialText" rows="6" class="form-control testimonial-content"></textarea>
        </div>
        <button type="submit" name="action" value="submit" class="btn btn-theme w-100">Add Category</button>
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
          <th>Product Name</th>
          <th>Description</th>
          <th>Image</th>
          <th>Date Of Add</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $i = 1;
          $query = $db-> query(" SELECT * FROM `product_categories` ORDER BY `pc_id` DESC");
          while($row = $query-> fetch_object()){
          
        ?>
        <!-- Example Row 1 -->
        <tr>
          <td><?= $i++;?></td>
         <td class="text-start">
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
          <td><?= $row-> pc_name?></td>
          <td><?= $row -> description?></td>
          <td><img src="uploads/category/<?= $row-> pc_image?>" alt="no images found" class="img-fluid" style="width: 50px;"></td>
          <td><?= $row-> create_at?></td>
        </tr>
        <?php 
          }
        ?>
       
        <!-- More rows here... -->
      </tbody>
    </table>
  </div>
</div>
</div>

<!-- CKEditor CDN -->
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<?php include 'includes/footer.php'; ?>
</div>

