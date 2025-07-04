<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="asserts/style.css">
</head>
<body>
    <div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <h2>Welcome</h2>
        <p>Already have an account.</p>
        <a class="btn" href="index.php">Log in</a>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Sign Up</h2>
        <form>
          <p>
            <label>Email address<span>*</span></label>
            <input type="text" placeholder="Email" required>
          </p>
            <p>
                <label>Username<span>*</span></label>
                <input type="text" placeholder="Username" required>
            </p>
          <p>
            <label>Phone Number<span>*</span></label>
            <input type="text" placeholder="Phone Number" required>
            </p>
            <p>
            <label>Enter Password<span>*</span></label>
            <input type="password" placeholder="Password" required>
          </p>
            <p>
            <label> Confirm Password<span>*</span></label>
            <input type="password" placeholder=" Confirm Password" required>
          </p>
          <p>
            <input type="submit" value="Sign in" onclick="location.href='index.php' " />
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