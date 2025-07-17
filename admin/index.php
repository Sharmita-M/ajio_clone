<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
       <link rel="stylesheet" href="asserts/style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"rel="stylesheet" >
    
  
</head>
<body>
    <div class="wrapper1">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <h2>Welcome Back</h2>
        <p>Create your account.<br>It's totally free.</p>
        <a class="btn" href="sign_in.php">Sign Up</a>
      </div>
    </div>
    <div class="col-right ">
      <div class="login-form">
        <h2>Login</h2>
        <form>
            <label>Username or email address<span>*</span></label>
            <input type="text"  placeholder="Username or Email" required>
            <label class="mt-2">Password<span>*</span></label>
            <input type="password" placeholder="Password" required>
            <button type="submit" class="mt-4 mb-4 p-1" value="Log in" onclick="location.href='dashboard.php' " > Login</button>
            <a class="float-end text-secondary text-decoration-none" href="">Forget Password?</a>
        </form>
      </div>
    </div>
  </div>
  <div class="credit">
      Made by Sharmita Mahapatra
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>