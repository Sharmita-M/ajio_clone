<?php include 'includes/header.php'; ?>
<title>AJIO | Create Account</title>

<style>
  .bg-ajio {
    background-color: #2c2f70 !important; /* AJIO navy blue */
  }
  .text-ajio {
    color: #2c2f70 !important;
  }
</style>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
  <div class="card shadow rounded-4 w-100" style="max-width: 500px;">
    <div class="card-header bg-ajio text-white text-center rounded-top-4 py-4">
      <h4 class="mb-0">Create Your AJIO Account</h4>
      <small>Start your shopping journey</small>
    </div>

    <div class="card-body p-4">
      <form>
        <div class="mb-3">
          <label for="name" class="form-label text-ajio fw-semibold">Full Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your full name">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label text-ajio fw-semibold">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label text-ajio fw-semibold">Phone Number</label>
          <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label text-ajio fw-semibold">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Create a password">
        </div>

        <div class="mb-3">
          <label for="confirmPassword" class="form-label text-ajio fw-semibold">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" placeholder="Re-enter password">
        </div>

        <button type="button" class="btn bg-ajio text-white w-100 fw-semibold" onclick="location.href='login.php' ">Create Account</button>
      </form>

      <div class="text-center mt-4">
        <span class="text-muted">Already have an account? </span>
        <a href="login.php" class="text-ajio fw-semibold">Sign In</a>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
