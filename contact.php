<?php include 'includes/header.php'; ?>
<title>AJIO | Contact Us</title>

<style>
  .bg-ajio {
    background-color: #2c2f70 !important;
  }
  .text-ajio {
    color: #2c2f70 !important;
  }
</style>

<div class="container py-5">
  <div class="text-center mb-5">
    <h2 class="text-ajio">📞 Contact Us</h2>
    <p class="text-muted">We'd love to hear from you. Please fill out the form below.</p>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow rounded-4">
        <div class="card-body p-4">
          <form action="contact_process.php" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label text-ajio fw-semibold">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label text-ajio fw-semibold">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" required>
            </div>

            <div class="mb-3">
              <label for="subject" class="form-label text-ajio fw-semibold">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject of your message" required>
            </div>

            <div class="mb-3">
              <label for="message" class="form-label text-ajio fw-semibold">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your message here..." required></textarea>
            </div>

            <button type="submit" class="btn bg-ajio text-white w-100 fw-semibold">Send Message</button>
          </form>
        </div>
      </div>

      <div class="mt-4 text-center">
        <p class="text-muted mb-1">Or reach us at:</p>
        <p class="text-ajio fw-semibold">support@ajio.com | +91 12345 67890</p>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
