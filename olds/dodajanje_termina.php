<!DOCTYPE html>
<?php
session_start();
if($_SESSION["loggedIn"] != true) {
    echo("Access denied!");
    exit();
}
echo("Enter my lord!");
?>
    <html class="wide wow-animation scrollTo smoothscroll" lang="en">

    <head>
        <!-- Site Title-->
        <title>Viverius</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="keywords" content="intense web design multipurpose template html">
        <meta name="date" content="Dec 26">
        <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
        <!-- Stylesheets-->
        <link rel="stylesheet" type="../text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:300,300italic,400,700,900%7CYesteryear">
        <link rel="stylesheet" href="../css/style.css">
        <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->

    </head>

    <body>
        <!-- Page-->
        <div class="page text-center">
            <!-- Page Header-->
            <header class="page-head">
                <!-- RD Navbar Transparent-->
                <div class="rd-navbar-wrap">
                    <nav class="rd-navbar rd-navbar-default rd-navbar-light" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static"
                        data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap">
                                    <span></span>
                                </button>
                                <!--Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <a href="index.php">
                                        <img style='margin-top: -5px;margin-left: -15px;' width='250' height='52' src='../images/logos/viverius.png'
                                            alt='' />
                                    </a>
                                </div>
                            </div>
                            <div class="rd-navbar-menu-wrap">
                                <div class="rd-navbar-nav-wrap">
                                    <div class="rd-navbar-mobile-scroll">
                                        <!--Navbar Brand Mobile-->
                                        <div class="rd-navbar-mobile-brand">
                                            <a href="index.php">
                                                <img style='margin-top: -5px;margin-left: -15px;' width='180' height='38' src='../images/logos/viverius.png'
                                                    alt='' />
                                            </a>
                                        </div>
                                        <div class="form-search-wrap">
                                            <!-- RD Search Form-->
                                            <form class="form-search rd-search" action="search-results.html" method="GET">
                                                <div class="form-group">
                                                    <label class="form-label form-search-label form-label-sm" for="rd-navbar-form-search-widget">Search</label>
                                                    <input class="form-search-input input-sm form-control form-control-gray-lightest input-sm" id="rd-navbar-form-search-widget"
                                                        type="text" name="s" autocomplete="off" />
                                                </div>
                                                <button class="form-search-submit" type="submit">
                                                    <span class="mdi mdi-magnify"></span>
                                                </button>
                                            </form>
                                        </div>
                                        <!-- RD Navbar Nav-->
                                        <ul class="rd-navbar-nav">
                                            <li class="active">
                                                <a href="dodajanje_termina.php">
                                                    <span>Domov</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Tečaji</span>
                                                </a>
                                                <ul class="rd-navbar-dropdown">
                                                    <li>
                                                        <a href="pregled_prijav.php">
                                                            <span class="text-middle">Pregled prijav</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="vse_prijave.php">
                                                            <span class="text-middle">Vse prijave</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Nastavitve</span>
                                                </a>
                                                <ul class="rd-navbar-dropdown">
                                                    <li>
                                                        <a href="nastavitve_clani.php">
                                                            <span class="text-middle">Članov</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="nastavitve_tecaji.php">
                                                            <span class="text-middle">Tečajev</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--RD Navbar Search-->
                                <div class="rd-navbar-search">
                                    <a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-inner,.rd-navbar-search"
                                        href="#">
                                        <span></span>
                                    </a>
                                    <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" method="GET">
                                        <div class="form-group">
                                            <label class="form-label" for="rd-navbar-search-form-input">Type and hit enter...</label>
                                            <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text"
                                                name="s" autocomplete="off" />
                                        </div>
                                        <!--button(type="submit").rd-navbar-search-form-submit.mdi.mdi-magnify-->
                                    </form>
                                    <!--div.rd-navbar-live-search-results-->
                                    <!--button(data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-inner, .rd-navbar-live-search-results").rd-navbar-search-toggle-->
                                    <!--  span-->
                                </div>
                                <!--RD Navbar shop-->
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- Classic Breadcrumbs-->
            <section class="breadcrumb-classic">
                <div class="shell section-34 section-sm-50">
                    <div class="range range-lg-middle">
                        <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
                            <h3>
                                <span class="big">Dodajanje termina</span>
                            </h3>
                        </div>
                        <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                            <ul class="list-inline list-inline-dashed p">
                                <li>
                                    <a href="index.php">Dodajanje termina</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Content-->
            <main class="page-content section-top-20">
            <form action="PHP_dodajanje_termina.php" method="post">
                <section>
                    <div class="shell">
                        <div class="range range-sm-center">
                            <div class="cell-sm-7 cell-md-4 text-left">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="rd-mailform-date">Datum:</label>
                                    <input name="DATUM" class="form-control" id="rd-mailform-date" type="date" name="date" Required>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section Input type time-->
                <section>
                    <div class="shell">
                        <div class="range range-sm-center">
                            <div class="cell-sm-7 cell-md-4 text-left">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="rd-mailform-time">Ura:</label>
                                    <input name="HOUR" class="form-control" id="rd-mailform-time" type="text" name="time" data-time-picker="time" Required>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="shell">
                        <div class="range range-sm-center text-left">
                            <div class="cell-sm-7 cell-md-4">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="input-shapes-1">Število odprtih mest</label>
                                    <input name="ST_ODPRTIH_MEST" class="form-control form-control-rect" id="input-shapes-1" type="text" Required> 
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="shell">
                        <div class="range range-sm-center text-left">
                            <div class="cell-sm-7 cell-md-4">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="input-shapes-1">Status tečaja</label>
                                    <select name="STATUS" class="form-control select-filter" data-minimum-results-for-search="Infinity" Required>
                                        <option value="" selected="selected"></option>
                                        <option>ODPRT</option>
                                        <option>ZAPRT</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="shell">
                        <div class="range range-sm-center text-left">
                            <div class="cell-sm-7 cell-md-4">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="input-shapes-1">Vrsta tečaja</label>
                                    <select name="VRSTA" class="form-control select-filter" data-minimum-results-for-search="Infinity" Required>
                                        <option value="" selected="selected"></option>
                                        <option value="1">1. Online klinicni primeri</option>
                                        <option value="2">2. Online priprave na strokovni izpit</option>
                                        <option value="3">3. Online delavnice za studente medicine</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="shell">
                        <div class="range range-sm-center text-left">
                            <div class="cell-sm-7 cell-md-4">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="input-shapes-1">Opis</label>
                                    <input name="OPIS_TECAJA" class="form-control form-control-rect" id="input-shapes-1" type="text" Required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section><br>

                <input type="submit">
                    </form>

                    <div class="shell offset-top-66 text-left"></div>
                    <div class="code-counter-type-3"></div>
                <!-- Section Input Group Multiple-->
                <!-- Page Footers-->
                <?php include("../footer.html");?>
        </div>
        <!-- JavaScript-->
        <script type="text/javascript">
            $('#rd-mailform-time').datetimepicker({
                format: 'dd/MM/yyyy hh:mm:ss',
                pick12HourFormat: 'true'
            });
        </script>
        <script src="../js/core.min.js"></script>
        <script src="../js/script.js"></script>
    </body>

    </html>