<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LOGIN &mdash; Jingo Institute</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
</head>
<body>
  <div class="container-full" id="login-box">
      <div class="left-box">
          <div class="reg">
            <h2>Welcome to Jingo & Sabainah Institute</h2>
            <h3>New to our site? Don't worry we'll get you started in no time. </h3>
            <button class="submit-btn mt-5"><a href="../index.php" class="btn m-top-20" style="color:#fff">Back Home</a>
            </button>
          </div>
      </div>

      <div class="right-box align-items-center">
  <?php
    $errMsg = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if (strpos($errMsg, 'login.php?1') !== false){
            echo "<div style='text-align:center; font-size:2rem; color:#f69'>You have successful SignUp</div>";
        }

    ?>
          <div class="login-container d-flex align-items-center justify-content-center">
            <form class="login-form text center" action="logincode.php" method="post">
                <h1 class="mb-5 ">WELCOME!</h1>
                <div class="form-group">
                    <input type="text" name="email" class="form-control form-control-lg" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" class="form-control form-control-lg" placeholder="password" required>
                </div>
                <div class="forgot-link d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label for="remember">Remember Password</label>
                </div><br>
                <a href="#">Forgot Password?</a>
              </div>
              <button type="submit" class="submit-btn mt-5">Login</button>
              <div>
                <p class="mb-3">Don't have an account? <a href="signup.php">SignUp</a></p>
              </div>
            </form>
      </div>
    </div>
</body>
</html>
