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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
      
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" media="screen">
        <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <!-- Page-->
        <div class="page text-center">
            <!-- Page Header-->
            <header>
                <!-- RD Navbar Transparent-->
                <div class="rd-navbar-wrap">
                    <nav class="rd-navbar rd-navbar-default rd-navbar-light">
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <!--Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <a href="index.php">
                                        <img style='margin-top: -5px;margin-left: -15px;' width='250' height='52' src='../images/logos/viverius.png' alt='' />
                                    </a>
                                </div>
                            </div>
                            <div class="rd-navbar-menu-wrap">
                                <div class="rd-navbar-nav-wrap">
                                    <div class="rd-navbar-mobile-scroll">

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
                                <span class="big">Vse prijave</span>
                            </h3>
                        </div>
                        <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                            <ul class="list-inline list-inline-dashed p">
                                <li>
                                    <a href="dodajanje_termina.php">Domov</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Content-->
            <div id="message"></div>
  <div id="wrap">
    <h1>Viverius education - Tečaji</h1>

    <!-- Feedback message zone -->


    <div id="toolbar">
      <a id="showaddformbutton" class="button green">
        <i class="fa fa-plus"></i> Add new row</a>
    </div>
    <br>
    <!-- Grid contents -->
    <div id="tablecontent"></div>

    <!-- Paginator control -->
    <div id="paginator"></div>


  </div>

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/editablegrid-2.1.0-49.js"></script>
  <!-- EditableGrid test if jQuery UI is present. If present, a datepicker is automatically used for date type -->
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <script src="js/demo.js"></script>

  <script type="text/javascript">

    var datagrid;

    window.onload = function () {
      datagrid = new DatabaseGrid();



      // key typed in the filter field
      $("#filter").keyup(function () {
        datagrid.editableGrid.filter($(this).val());

        // To filter on some columns, you can set an array of column index 
        //datagrid.editableGrid.filter( $(this).val(), [0,3,5]);
      });

      $("#showaddformbutton").click(function () {
        showAddForm();
      });
      $("#cancelbutton").click(function () {
        showAddForm();
      });

      $("#addbutton").click(function () {
        datagrid.addRow();
      });

    }

    $(function () {

    });

  </script>

  <!-- simple form, used to add a new row -->
  <div id="addform">

    <div class="row">
      <input name="DATUM" id="DATUM" type="date" placeholder="datum">
    </div>

    <div class="row">
      <input name="HOUR" id="HOUR" type="time" placeholder="ura">
    </div>

    <div class="row">
      <input name="ST_ODPRTIH_MEST" id="ST_ODPRTIH_MEST" type="number" placeholder="število odprtih mest">
    </div>

    <div class="row">
      <select name="STATUS" id="STATUS" class="form-control select-filter">
        <option value="" selected="selected"></option>
        <option>odprt</option>
        <option>zaprt</option>
      </select>
    </div>

    <div class="row">
      <select name="VRSTA" id="VRSTA">
        <option value="" selected="selected"></option>
        <option value="1">1. Online klinicni primeri</option>
        <option value="2">2. Online priprave na strokovni izpit</option>
        <option value="3">3. Online delavnice za studente medicine</option>
      </select>
    </div>

    <div class="row">
      <input name="OPIS_TECAJA" id="OPIS_TECAJA" type="text" placeholder="Opis">
    </div>

    <div class="row tright">
      <a id="addbutton" class="button green">
        <i class="fa fa-save"></i> Shrani</a>
      <a id="cancelbutton" class="button delete">Cancel</a>
    </div>
  </div>

                <!-- Section Input Group Multiple-->
                <!-- Page Footers-->
                <?php include("../footer.html");?>

      
        <!-- JavaScript-->
        
    </body>

    </html>