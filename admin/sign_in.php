<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
       <link rel="stylesheet" href="asserts/style.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"rel="stylesheet" >

</head>
<body>
    <div class="wrapper1">
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
    
            <label>Email address<span>*</span></label>
            <input  type="text" placeholder="Email" required>
        
                <label class="mt-2">Username<span>*</span></label>
                <input type="text" placeholder="Username" required>
        
            <label class="mt-2">Phone Number<span>*</span></label>
            <input type="text" placeholder="Phone Number" required>
         
            <label class="mt-2">Enter Password<span>*</span></label>
            <input type="password" placeholder="Password" required>
        
            <label class="mt-2"> Confirm Password<span>*</span></label>
            <input type="password" placeholder=" Confirm Password" required>
        
           <button type="submit" class="mt-4 mb-4 p-1" value="signin" onclick="location.href='index.php' " > Sign in</button>
         
    
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