
<?php include 'includes/header.php'; ?>


<div class="flex-grow-1 container-fluid mt-5">
  <h2 class="section-title text-center">📢 Desktop Banner Management</h2>

  <!-- Add Banner Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add New Banner</div>
    <div class="card-body">
      <form method ="POST" action="manage/manage-banner.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="bannerTitle" class="form-label">Banner Title</label>
          <input type="text" name="title" class="form-control" id="bannerTitle" placeholder="E.g. Flash Sale">
        </div>
         <div class="mb-3">
          <label for="testimonialText" class="form-label">Banner Description</label>
          <textarea name="description" id="testimonialText" rows="6" class="form-control testimonial-content"></textarea>
        </div>
        <div class="mb-3">
          <label for="bannerImage" class="form-label">Upload Banner <small class="text-muted">(1920x600)</small></label>
          <input class="form-control" name="image" type="file" id="bannerImage">
        </div>
        <button type="submit" name="action" value="submit" class="btn btn-theme w-100">Upload Banner</button>
      </form>
    </div>
  </div>

  <!-- View Banners Card -->
  <div class="card card-custom mb-5">
    <div class="gradient-header">📋 View All Banners</div>
    <div class="card-body table-responsive">
      <table class="table table-bordered align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Preview</th>
            <th>Date</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td class="text-start">
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
            <td>End of Season Sale</td>
            <td><img src="https://via.placeholder.com/300x80" class="banner-image" alt="banner"></td>
            <td>2025-07-04</td>
            
          </tr>
        
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
</div>
