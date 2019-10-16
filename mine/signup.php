<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SIGNUP &mdash; Jingo Institute</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/regstyle.css">
  <link rel="shortcut icon" href="../assets/img/favicon.ico" />
</head>
<body>
  <div class="container-full" id="login-box">
    <div class="left-box">
      <div class="welcome-section">
          <h2>Welcome to JnS online classroom</h2>
          <h3>New to our site? Don't worry we'll get you started in no time. Signup to get started.</h3>
          <p class="signIn mt-5">Already have an account sign in <a href="login.php ">Here</a></p>
      </div>
    </div>
  </div>
  <div class="right-box align-items-center">
<?php
  $errMsg = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if (strpos($errMsg, 'signup.php?error=empty') !== false){
          echo "<div style='text-align:center; font-size:1.6rem; color:#f69'>You left empty field(s)</div>";
      }

  $Msg = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if (strpos($Msg, 'signup.php?error=password') !== false){
          echo "<div style='text-align:center; font-size:1.4rem; color:#f69'>Enter Same Password</div>";
      }

  $Msg1 = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if (strpos($Msg1, 'signup.php?error=username') !== false){
          echo "<div style='text-align:center; font-size:1.5rem; color:#f69'>This Email is taken</div>";
      }
  ?>
    <div class="login-container d-flex align-items-center justify-content-center">
      <form class="signup-form text-center" action="signupcode.php" method="post">
        <h1 class="mb-3">SIGN-UP</h1>
        <div class="form-group">
          <input type="text" name="firstName" class="form-control form-control-lg" placeholder="Enter your FirstName">
        </div>
        <div class="form-group">
          <input type="text" name="lastName" class="form-control form-control-lg" placeholder="Enter your LastName">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email Address">
        </div>
        <div class="form-group">
          <input type="password" name="pwd" class="form-control form-control-lg" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="password" name="pwd1" class="form-control form control-lg" placeholder="Confirm Password">
        </div>
        <div class="form-group">
          <select name="gender" class="form-control selectpicker" required>
            <option value="">Your Gender </option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="forgot-link d-flex align-items-center justify-content-between">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label for="remember">By clicking the signup button below you accept our terms and coditions!</label>
          </div>
        </div> <br>
        <div>
          <button type="submit" class="btn">Sign Up</button>
        </div>
      </form>
    </div>
  </div>
  2019 &copy; Jingo & Sabainah
</body>
</html>
