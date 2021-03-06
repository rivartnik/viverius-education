<!DOCTYPE html>
<?php
include("../config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form

  $myusername = mysqli_real_escape_string($db,$_POST['uname']);
  $mypassword = mysqli_real_escape_string($db,$_POST['psw']);


  $result = mysqli_query($db,"SELECT password FROM interna_dostop WHERE up_name = '$myusername'");
  $row = mysqli_fetch_array($result);
  $hash = $row['password'];


  if (password_verify($mypassword,$hash)) {

    $_SESSION["loggedIn"] = true;
    $_SESSION["up_name"] = $myusername;

    header('Location: index.php'); exit;

  } else {
    echo 'Invalid password.';

  }
}
?>
<html class="wide wow-animation scrollTo smoothscroll" lang="en">
  <head>
    <!-- Site Title-->
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template html">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:300,300italic,400,700,900%7CYesteryear">
    <link rel="stylesheet" href="../css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Content-->
      <main class="page-content bg-shark-radio">
        <div class="one-page">
          <div class="one-page-header">
            <!--Navbar Brand-->
            <div class="rd-navbar-brand"><a href="interna_index.php"><img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src='../images/logos/viverius.png'  alt=''/></a></div>
          </div>
          <!-- Login-->
          <section>
            <div class="shell">
              <div class="range">
                <div class="section-110 section-cover range range-xs-center range-xs-middle">
                  <div class="cell-xs-8 cell-sm-6 cell-md-4">
                    <div class="panel section-34 section-sm-41 inset-left-20 inset-right-20 inset-sm-left-20 inset-sm-right-20 inset-lg-left-30 inset-lg-right-30 bg-white shadow-drop-md">
                                <!-- Icon Box Type 4--><span class="icon icon-circle icon-bordered icon-lg icon-default mdi mdi-account-multiple-outline"></span>
                                <div>
                                  <div class="offset-top-24 text-darker big text-bold">Login to Viverius-education interna spletna stran</div>
                                  <p class="text-extra-small text-dark offset-top-4">Enter your credentials below</p>
                                </div>
                      <!-- RD Mailform-->
                      <form class="text-left offset-top-30" data-form-output="form-output-global" data-form-type="contact" method="post">
                        <div class="form-group">
                          <div class="input-group input-group-sm"><span class="input-group-addon input-group-addon-inverse"><span class="input-group-icon mdi mdi-account-outline"></span></span>
                            <input class="form-control" id="login-your-login" placeholder="Your username" type="text" name="uname" data-constraints="@Required">
                          </div>
                        </div>
                        <div class="form-group offset-top-20">
                          <div class="input-group input-group-sm"><span class="input-group-addon input-group-addon-inverse"><span class="input-group-icon mdi mdi-lock-open-outline"></span></span>
                            <input class="form-control" id="login-your-password" placeholder="Your Password" type="password" name="psw" data-constraints="@Required">
                          </div>
                        </div>
                        <button class="btn btn-sm btn-icon btn-block btn-primary offset-top-20" type="submit">Sign In <span class="icon mdi mdi-arrow-right-bold-circle-outline"></span></button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="one-page-footer">
            <p class="small" style="color: rgba(255,255,255, 0.3);">Viverius Education &copy; <span class="copyright-year"></span> . <a href="privacy.html">Pogoji poslovanja!</a></p>
          </div>
        </div>
      </main>
    </div>
    <!-- Global RD Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>