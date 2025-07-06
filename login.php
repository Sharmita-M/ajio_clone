<?php include 'includes/header.php'; ?>
<title>AJIO | Sign In</title>

<style>
  .bg-ajio {
    background-color: #2c2f70 !important; /* AJIO navy blue */
  }
  .text-ajio {
    color: #2c2f70 !important;
  }
</style>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
  <div class="card shadow rounded-4 w-100" style="max-width: 400px;">
    <div class="card-header bg-ajio text-white text-center rounded-top-4 py-4">
      <h4 class="mb-0">Welcome to AJIO</h4>
      <small>Log in to continue shopping</small>
    </div>

    <div class="card-body p-4">
      <form>
        <div class="mb-3">
          <label for="email" class="form-label text-ajio fw-semibold">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label text-ajio fw-semibold">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password">
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember">
            <label class="form-check-label small" for="remember">
              Remember me
            </label>
          </div>
          <a href="#" class="small text-ajio">Forgot password?</a>
        </div>

        <button type="button" class="btn bg-ajio text-white w-100 fw-semibold" onclick="location.href='index.php' ">Log In</button>
      </form>

      <div class="text-center mt-4">
        <span class="text-muted">Don't have an account? </span>
        <a href="sign_in.php" class="text-ajio fw-semibold">Create one</a>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
