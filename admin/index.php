<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="asserts/style.css">
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
    <div class="col-right">
      <div class="login-form">
        <h2>Login</h2>
        <form>
          <p>
            <label>Username or email address<span>*</span></label>
            <input type="text" placeholder="Username or Email" required>
          </p>
          <p>
            <label>Password<span>*</span></label>
            <input type="password" placeholder="Password" required>
          </p>
          <p>
            <input type="submit" value="Log in" onclick="location.href='dashboard.php' " />
          </p>
          <p>
            <a href="">Forget Password?</a>
          </p>
        </form>
      </div>
    </div>
  </div>
  <div class="credit">
      Made by Sharmita Mahapatra
  </div>
</div>
</body>
</html>