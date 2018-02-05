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
              <h3><span class="big">Kontakt</span></h3>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.php">Domov</a></li>
                <li>Kontakt</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Content-->
      <main class="page-content section-top-20">
        <section class="section-top-20 section-sm-top-20">
          <!-- Contact Us-->
          <section>
            <div class="shell-fluid">
              <div class="range range-xs-center text-sm-left offset-top-50">
                <div class="cell-xs-10 cell-sm-8 cell-md-8 cell-xl-6 text-left">
                  <p>Za vsa vprašanja, pohvale ali pripombe nam pišite in odgovorili vam bomo v najkrajšem možnem času.</p>
                </div>
              </div>
              <div class="range range-xs-center text-sm-left offset-top-50">
                <div class="cell-xs-10 cell-sm-8 cell-md-8 cell-lg-5 cell-xl-4">
                  <!-- RD Mailform-->
                  <form class="rd-mailform text-left" method="post" action="backend/PHP_kontakt.php">
                    <div class="range">
                      <div class="cell-lg-6">
                        <div class="form-group">
                          <label class="form-label" for="contact-me-name">Ime</label>
                          <input class="form-control" id="contact-me-name" type="text" name="ime" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                        <div class="form-group">
                          <label class="form-label" for="contact-me-name">Priimek</label>
                          <input class="form-control" id="contact-me-name" type="text" name="priimek" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="cell-lg-12 offset-top-20 offset-lg-top-30">
                        <div class="form-group">
                          <label class="form-label" for="contact-me-email">E-Mail</label>
                          <input class="form-control" id="contact-me-email" type="email" name="email" data-constraints="@Required @Email">
                        </div>
                      </div>
                      <div class="cell-lg-12 offset-top-20 offset-lg-top-30">
                        <div class="form-group">
                          <label class="form-label" for="contact-me-message">Sporočilo</label>
                          <textarea class="form-control" id="contact-me-message" name="sporocilo" data-constraints="@Required" style="height: 150px;"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="range range-xs-center range-lg-left text-center text-lg-left offset-top-30">
                      <div class="cell-xs-8 cell-sm-6">
                        <button class="btn btn-lg btn-block btn-primary" type="submit">Pošlji</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="cell-xs-10 cell-sm-8 cell-md-8 cell-lg-3 cell-xl-2 offset-top-50 offset-lg-top-0">
                  <div class="inset-xl-right-20 text-center text-lg-left">
                    <address class="contact-info reveal-sm-inline-block text-left">
                      <div class="unit unit-spacing-sm unit-horizontal p">
                        <div class="unit-left"><span class="icon icon-xxs fa fa-map-marker"></span></div>
                        <div class="unit-body"><a href="#">Na Fari 2, 2391 Prevalje</a></div>
                      </div>
                      <div class="p unit unit-spacing-xs unit-horizontal offset-top-20">
                        <div class="unit-left"><span class="icon icon-xxs fa fa-phone"></span></div>
                        <div class="unit-body"><a href="callto:#">+386 41-881 193</a></div>
                      </div>
                      <div class="p unit unit-spacing-xs unit-horizontal offset-top-10">
                        <div class="unit-left"><span class="icon icon-xxs fa fa-envelope"></span></div>
                        <div class="unit-body"><a href="mailto:#">info@viverius-education.com</a></div>
                      </div>
                    </address>
                  </div>
                  <div class="text-center text-lg-left offset-top-30">
                              <ul class="list-inline">
                                <li><a class="icon fa fa-facebook icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                                <li><a class="icon fa fa-twitter icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                                <li><a class="icon fa fa-linkedin icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                              </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="shell offset-top-66 text-left">
        <div class="code-counter-type-3"></div>
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