<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Banner Admin - Card Layout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>


    .gradient-header {
      background: linear-gradient(to right, #6d61d3, #8573f1);
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

    .banner-image {
      width: 130px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .table thead {
      background-color: #eeeaff;
      color: #4f45a6;
    }

    .section-title {
      color: #463d96;
      font-weight: bold;
      margin-bottom: 2rem;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h2 class="section-title text-center">📢 Desktop Banner Management</h2>

  <!-- Add Banner Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add New Banner</div>
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label for="bannerTitle" class="form-label">Banner Title</label>
          <input type="text" class="form-control" id="bannerTitle" placeholder="E.g. Flash Sale">
        </div>
        <div class="mb-3">
          <label for="bannerImage" class="form-label">Upload Banner <small class="text-muted">(1920x600)</small></label>
          <input class="form-control" type="file" id="bannerImage">
        </div>
        <button type="submit" class="btn btn-theme w-100">Upload Banner</button>
      </form>
    </div>
  </div>

  <!-- View Banners Card -->
  <div class="card card-custom">
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
            <td>End of Season Sale</td>
            <td><img src="https://via.placeholder.com/300x80" class="banner-image" alt="banner"></td>
            <td>2025-07-04</td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td colspan="5" class="text-center text-muted">More banners will appear here...</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Bootstrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
