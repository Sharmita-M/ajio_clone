<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Promo Code Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    body {
      background-color: #f8f9fc;
    }
    .card-header {
      background: linear-gradient(to right, #6d61d3, #8573f1);
      color: white;
      font-weight: 500;
    }
    .action-btns .btn {
      padding: 0.3rem 0.6rem;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <!-- Section Title -->
  <h2 class="text-center mb-4 text-primary-emphasis fw-bold">🎫 Promo Code Management</h2>

  <!-- Form Section -->
  <div class="card shadow mb-4">
    <div class="card-header">➕ Create a New Promo Code</div>
    <div class="card-body">
      <form>
        <div class="row g-3">
          <div class="col-md-6 col-lg-3">
            <label class="form-label">Promocode</label>
            <input type="text" class="form-control" placeholder="E.g. SUMMER2025">
          </div>
          <div class="col-md-6 col-lg-3">
            <label class="form-label">Value (%)</label>
            <input type="number" class="form-control" placeholder="E.g. 25">
          </div>
          <div class="col-md-6 col-lg-3">
            <label class="form-label">Min Order</label>
            <input type="number" class="form-control" placeholder="E.g. 500">
          </div>
          <div class="col-md-6 col-lg-3">
            <label class="form-label">Category</label>
            <select class="form-select">
              <option selected disabled>Choose category</option>
              <option>Fashion</option>
              <option>Electronics</option>
              <option>Beauty</option>
              <option>Groceries</option>
            </select>
          </div>
        </div>
        <div class="text-end mt-4">
          <button type="submit" class="btn btn-primary px-4">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Table Section -->
  <div class="card shadow">
    <div class="card-header">📋 Available Promo Codes</div>
    <div class="card-body table-responsive">
      <table class="table table-hover text-center align-middle">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Action</th>
            <th>Code</th>
            <th>Value</th>
            <th>Min Order</th>
            <th>Category</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
             <td class="text-center">
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
            <td>SUMMER2025</td>
            <td>25%</td>
            <td>600</td>
            <td>Fashion</td>
          </tr>
          <tr>
            <td>2</td>
             <td class="text-center">
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
            <td>TECH10</td>
            <td>10%</td>
            <td>1000</td>
            <td>Electronics</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
