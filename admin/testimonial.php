<?php include 'includes/header.php'; ?>


<div class="flex-grow-1 container-fluid mt-5">
  <h2 class="section-title text-center">📝 Testimonial Management</h2>

  <!-- Add Testimonial Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add New Testimonial</div>
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label for="authorName" class="form-label">Author Name</label>
          <input type="text" class="form-control" id="authorName" placeholder="E.g. Jane Doe">
        </div>
        <div class="mb-3">
          <label for="testimonialText" class="form-label">Testimonial Content</label>
          <textarea name="testimonialText" id="testimonialText" rows="6" class="form-control testimonial-content"></textarea>
        </div>
        <button type="submit" class="btn btn-theme w-100">Add Testimonial</button>
      </form>
    </div>
  </div>

  <!-- View Testimonials Card -->
  <div class="card card-custom">
    <div class="gradient-header">📋 All Testimonials</div>
    <div class="card-body">
      <div class="mb-4">
        <h6 class="fw-semibold">Jane Doe</h6>
        <div class="bg-light border p-3 rounded">
          "CKEditor is amazing! I can write rich text testimonials without coding. This panel looks great too!"
        </div>
      </div>
      <div class="mb-4">
        <h6 class="fw-semibold">Alex Smith</h6>
        <div class="bg-light border p-3 rounded">
          "Loving the UI — this testimonial section is clean, responsive, and intuitive. Great work!"
        </div>
      </div>
    </div>
  </div>
</div>

 <!-- CKEditor CDN -->
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<?php include 'includes/footer.php'; ?>
</div>
