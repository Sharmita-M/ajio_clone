<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin - Video Links</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f4f6fb;
      font-family: 'Segoe UI', sans-serif;
    }

    .gradient-header {
      background: linear-gradient(to right,rgb(47, 46, 72),rgb(170, 168, 241));
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

    .video-link {
      word-break: break-all;
    }

    .video-card {
      margin-bottom: 1.5rem;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h2 class="section-title text-center">🎬 Video Management</h2>

  <!-- Add Video Card -->
  <div class="card card-custom">
    <div class="gradient-header">➕ Add New Video</div>
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label for="videoTitle" class="form-label">Video Title</label>
          <input type="text" class="form-control" id="videoTitle" placeholder="E.g. Promo Trailer, Interview Clip">
        </div>
        <div class="mb-3">
          <label for="videoLink" class="form-label">Video Link (YouTube/Vimeo)</label>
          <input type="url" class="form-control" id="videoLink" placeholder="https://www.youtube.com/watch?v=abc123">
        </div>
        <button type="submit" class="btn btn-theme w-100">Save Video</button>
      </form>
    </div>
  </div>

  <!-- View Videos Card -->
  <div class="card card-custom">
    <div class="gradient-header">📋 Saved Video Links</div>
    <div class="card-body">
      <div class="video-card">
        <h6 class="fw-semibold">Promo Teaser 2025</h6>
        <a href="https://www.youtube.com/watch?v=abcdef" target="_blank" class="video-link text-decoration-none text-primary">https://www.youtube.com/watch?v=abcdef</a>
      </div>
      <div class="video-card">
        <h6 class="fw-semibold">Behind The Scenes</h6>
        <a href="https://vimeo.com/123456" target="_blank" class="video-link text-decoration-none text-primary">https://vimeo.com/123456</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
