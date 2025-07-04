<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin - Testimonials</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CKEditor CDN -->
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

  <style>
    body {
      background-color: #f4f6fb;
      font-family: 'Segoe UI', sans-serif;
    }

    .gradient-header {
      background: linear-gradient(to right,rgb(189, 174, 230), #7873f5);
      color: white;
      font-weight: 600;
      padding: 1rem 1.5rem;
      border-top-left-radius: 0.75rem;
      border-top-right-radius: 0.75rem;
    }

    .card-custom {
      border-radius: 0.75rem;
      border: none;
      box-shadow: 0 4px 18px rgba(0, 0, 0, 0.06);
      margin-bottom: 2rem;
    }

    .btn-theme {
      background: linear-gradient(to right, #6d61d3, #8573f1);
      color: white;
      border: none;
    }

    .btn-theme:hover {
      background: linear-gradient(to right, #5e52b7, #7466dc);
    }

    .section-title {
      color: #463d96;
      font-weight: bold;
      margin-bottom: 2rem;
    }

    .testimonial-content {
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 0.5rem;
      background-color: white;
    }
  </style>
</head>
<body>

<div class="container py-5">
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

<!-- Bootstrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Initialize CKEditor -->
<script>
  CKEDITOR.replace('testimonialText');
</script>
</body>
</html>
