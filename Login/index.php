<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | CodingLab</title>
    <link rel="stylesheet" href="./style/style_login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form method="post" action="./db/functions.php">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email or Phone" name="usr" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="pss" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" name="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
