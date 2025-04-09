

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buyer Login</title>
  <link rel="stylesheet" href="umuguzi.css">
</head>
<body>
  <div class="login-container">
    <h2>Buyer Login</h2>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit">Login</button>
      <p>Don't have an account? <a href="signup.html">Sign up here</a></p>
    </form>
  </div>
</body>
</html>
