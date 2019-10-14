<!DOCTYPE html>
 <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../assets/img/favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/bootsnav.css">
        <link rel="stylesheet" href="../assets/css/responsive2.css" />
        <link rel="stylesheet" href="../contact-style.css">
        <link rel="stylesheet" href="../assets/css/style2.css">
        <script src="../contact-us.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <div class="culmn">
            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">

                        </button>
                    <h2 class="text-white" style="padding-top: 20px;">Jingo Institute</h2>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <div class="business_btn" style="padding-bottom: 15px;">
                              <div class="collapse navbar-collapse" id="navbar-menu">
                                  <ul class="nav navbar-nav navbar-right">
                                      <div class="business_btn" style="padding-bottom: 15px;">
                                          <a href="../index.php" class="btn btn-default m-top-20">Home</a>
                                      </div>
                                  </ul>
                              </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
            <section id="home" class="home bg-black">
                <div class="overlay"></div>
                <div class="container">
                  <div class="row">
                    <div class="main_home text-center">
                      <div class="col-md-12">
                        <div class="hello_slid">
                          <div class="slid_item">
                            <div class="home_text ">

                            </div>
                            <h1 class="text-white">Contact Us</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

    <?php
      $errMsg = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
          if (strpos($errMsg, 'contact.php?sent') !== false){
              echo "<div style='text-align:center; font-size:3rem; color:#fff'>Message Sent</div>";
          }

      ?>
            </section>
            <section>
              <div class="container">
                <div class="skills">
                  <div class="column">
                    <form method="POST" action="contactform.php">
                        <div class="tec">
                            <h1>Send Us A Message</h1>
                        </div>
                        <div class="form-group">
                          <fieldset>
                            <input name="name" placeholder="Full Name" type="text" required >
                          </fieldset>
                          <fieldset>
                            <input name="email" placeholder="Email Address" type="email" required>
                          </fieldset>
                          <fieldset>
                            <input name="subject" placeholder="Subject" type="text" required>
                          </fieldset>
                          <fieldset>
                            <textarea name="message" placeholder="Type your Message Here..." required></textarea>
                          </fieldset>
                          <fieldset>
                            <input class="sumit" type="submit" />
                          </fieldset>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
            </section>
            <footer>
              <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                <div class="col-md-12"> 2019 &copy; Jingo & Sabainah</div>
              </div>
            </footer>
        </div>
  <script src="../assets/js/vendor/jquery-1.11.2.min.js"></script>
  <script src="../assets/js/vendor/bootstrap.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>
