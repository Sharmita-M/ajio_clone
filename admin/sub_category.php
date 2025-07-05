<?php include 'includes/header.php'; ?>
 <div class="flex-grow-1 container-fluid mt-5">
  <h2 class="section-title text-center">📝 Category Management</h2>

  <!-- Add Testimonial Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add New Category</div>
    <div class="card-body">
      <form>
         <div class="mb-3">
        <label for="selectCategory" class="form-label">Select Category</label>
        <select class="form-select" id="selectCategory">
          <option selected disabled>Choose category</option>
          <option value="Men">Men</option>
          <option value="Women">Women</option>
          <option value="Electronics">Electronics</option>
          <option value="Groceries">Groceries</option>
          <option value="Beauty">Beauty</option>
        </select>
      </div>

        <div class="mb-3">
          <label for="authorName" class="form-label"> Sub Category Name</label>
          <input type="text" class="form-control" id="authorName" placeholder="E.g. Men Jeans">
        </div>
        <div class="mb-3">
          <label for="bannerImage" class="form-label">Upload Image <small class="text-muted">(400x400)</small></label>
          <input class="form-control" type="file" id="bannerImage">
        </div>
        <div class="mb-3">
          <label for="testimonialText" class="form-label">Catagory Description</label>
          <textarea name="testimonialText" id="testimonialText" rows="6" class="form-control testimonial-content"></textarea>
        </div>
        <button type="submit" class="btn btn-theme w-100">Add Category</button>
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
        <!-- Example Row 1 -->
        <tr>
          <td>1</td>
         <td class="text-start">
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
          <td>Shirt</td>
          <td>Blue Striped Shirt</td>
          <td><img src="uploads/mutton.jpg" alt="Blue Striped Shirt" class="img-fluid" style="width: 50px;"></td>
          <td>2024-11-21 12:38:01</td>
        </tr>
        <!-- Example Row 2 -->
        <tr>
          <td>2</td>
          <td class="text-start">
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
          <td>Phone</td>
          <td>Samsung Galaxy</td>
          <td><img src="uploads/prawn.jpg" alt="Samsung Galaxy Phone" class="img-fluid" style="width: 50px;"></td>
          <td>2024-12-03 14:15:33</td>
        </tr>
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

