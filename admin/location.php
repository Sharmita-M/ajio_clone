<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin - Location Section</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f4f6fb;
      font-family: 'Segoe UI', sans-serif;
    }

    .gradient-header {
      background: linear-gradient(to right,rgb(36, 44, 69),rgb(146, 144, 193));
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

    .address-box {
      white-space: pre-line;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h2 class="section-title text-center">📍 Address & Location Management</h2>

  <!-- Add Address Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add Address / Location</div>
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label for="placeName" class="form-label">Name</label>
          <input type="text" class="form-control" id="placeName" placeholder="E.g. Head Office, Warehouse">
        </div>
        <div class="mb-3">
          <label for="locationAddress" class="form-label">Address</label>
          <textarea name="locationAddress" id="locationAddress" rows="4" class="form-control" placeholder="Enter full address with PIN, City, State, etc."></textarea>
        </div>
        <button type="submit" class="btn btn-theme w-100">Save Address</button>
      </form>
    </div>
  </div>

  <!-- View Addresses Card -->
  <div class="card card-custom">
    <div class="gradient-header">📋 Saved Locations</div>
    <div class="card-body">
      <div class="mb-4">
        <h6 class="fw-semibold">Head Office</h6>
        <div class="bg-light border p-3 rounded address-box">
          123, Infinity Tower Road, Phase II,<br>
          Mumbai, Maharashtra - 400001
        </div>
      </div>
      <div class="mb-4">
        <h6 class="fw-semibold">Warehouse 1</h6>
        <div class="bg-light border p-3 rounded address-box">
          Plot No. 14A, Industrial Estate,<br>
          Hosur, Tamil Nadu - 635126
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
