<!DOCTYPE html>
<html class="wide wow-animation scrollTo smoothscroll" lang="en">
  <head>
    <!-- Site Title-->
    <title>Online klinični primeri</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template html">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:300,300italic,400,700,900%7CYesteryear">
    <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <?php include("header.html");?>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic">
        <div class="shell section-34 section-sm-50">
          <div class="range range-lg-middle">
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h3><span class="big">Prijava na tečaj</span></h3>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.php">Domov</a></li>
                <li><a href="storitve.php">Tečaji</a></li>
                <li>Prijava na tečaj
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Content-->
      <main class="page-content section-top-20 section-sm-top-50">
      <section class="section-20 section-sm-50">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-8 cell-md-7 cell-lg-8">
                <!-- RD Mailform-->
                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="range">
                    <div class="cell-lg-6">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="make-appointment-name">Name:</label>
                        <input class="form-control" id="make-appointment-name" type="text" name="name" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="make-appointment-email">Email:</label>
                        <input class="form-control" id="make-appointment-email" type="text" name="email" data-constraints="@Required @Email">
                      </div>
                    </div>
                    <div class="cell-lg-6 offset-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="make-appointment-date">Date:</label>
                        <input class="form-control" id="make-appointment-date" type="text" name="date" data-constraints="@Required" data-time-picker="date">
                      </div>
                    </div>
                    <div class="cell-lg-6 offset-top-20">
                      <div class="range offset-top-0">
                        <div class="cell-xs-6">
                          <div class="form-group"> 
                            <label class="form-label form-label-outside" for="make-appointment-time-start">Required Time Interval Start:</label>
                            <input class="form-control" id="make-appointment-time-start" type="text" name="time-start" data-constraints="@Required" data-time-picker="time">
                          </div>
                        </div>
                        <div class="cell-xs-6">
                          <div class="form-group">
                            <label class="form-label form-label-outside" for="make-appointment-time-end">Required Time Interval End:</label>
                            <input class="form-control" id="make-appointment-time-end" type="text" name="tim-end" data-constraints="@Required" data-time-picker="time">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="cell-lg-12 offset-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="make-appointment-message">Message:</label>
                        <textarea class="form-control" id="make-appointment-message" name="message" data-constraints="@Required" style="height: 150px;"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="text-center text-lg-left offset-top-30">
                    <button class="btn btn-primary" type="submit">Make an appointment</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>


      </main>

      <!-- Page Footers-->
      <?php include("footer.html");?>
    </div>
    <!-- JavaScript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>