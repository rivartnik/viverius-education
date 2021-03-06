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
    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }

            table, td, th {
                border: 1px solid black;
                padding: 5px;
            }

            th {text-align: left;}
        </style>

        <script>
            function showUser(str) {
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else { 
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET","prijaveOKP.php?q="+str,true);
                    xmlhttp.send();
                }
            }
        </script>
         <script>
            function showUser2(str) {
                if (str == "") {
                    document.getElementById("txtHint2").innerHTML = "";
                    return;
                } else { 
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint2").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET","prijaveOPS.php?q="+str,true);
                    xmlhttp.send();
                }
            }
        </script>
         <script>
            function showUser3(str) {
                if (str == "") {
                    document.getElementById("txtHint3").innerHTML = "";
                    return;
                } else { 
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint3").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET","prijaveODS.php?q="+str,true);
                    xmlhttp.send();
                }
            }
        </script>

            <style>
            html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
            .w3-sidenav a,.w3-sidenav h4{padding:12px;}
            .w3-navbar a{padding-top:12px !important;padding-bottom:12px !important;}
            table {
                width: 100%;
                border-collapse: collapse;
            }

            table, td, th {
                border: 1px solid black;
                padding: 5px;
            }

            th {text-align: left;}
            </style>

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
                                <a href="dodajanje_termina.php">
                                    <img style='margin-top: -5px;margin-left: -15px;' width='250' height='52' src='../images/logos/viverius.png'
                                        alt='' />
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
            <main class="page-content section-top-20">
                <section>
                <form>
                        <select name="dates" onchange="showUser(this.value)">
                            <option value="" selected="selected">Online klinicni primeri</option>;
                            <?php 
                            include("../config.php");
                            session_start();
                            if (!$db) {
                                die('Could not connect: ' . mysqli_error($db));
                            }
                            $sql = mysqli_query($db, "SELECT id, DATUM FROM razpisani_tecaji WHERE VRSTA = '1'"); //dodaj število prijav, potem pa lahko tu dodaš da je št prijav >0 pa se bodo kazali samo tisti ki imajo prijave
                            while ($row = $sql->fetch_assoc()){
                                  $row['DATUM'] = new DateTime($row['DATUM']);
                                                        $dateFormated =  $row['DATUM']->format('d.m.Y');
                                echo "<option value='" . $row['id'] . "'>" . $dateFormated ."</option>";

                            }
                            ?>
                        </select>
                    </form>
                       <form>
                        <select name="dates2" onchange="showUser2(this.value)">
                            <option value="" selected="selected">Online priprave na strokovni izpit</option>;
                            <?php 
                            include("../config.php");
                            session_start();
                            if (!$db) {
                                die('Could not connect: ' . mysqli_error($db));
                            }
                            $sql = mysqli_query($db, "SELECT id, DATUM FROM razpisani_tecaji WHERE VRSTA = '2'");
                              while ($row = $sql->fetch_assoc()){
                                  $row['DATUM'] = new DateTime($row['DATUM']);
                                                        $dateFormated =  $row['DATUM']->format('d.m.Y');
                                echo "<option value='" . $row['id'] . "'>" . $dateFormated ."</option>";

                            }
                            ?>
                        </select>
                    </form>
                       <form>
                        <select name="dates3" onchange="showUser3(this.value)">
                            <option value="" selected="selected">Online delavnice za studente medicine</option>;
                            <?php 
                            include("../config.php");
                            session_start();
                            if (!$db) {
                                die('Could not connect: ' . mysqli_error($db));
                            }
                            $sql = mysqli_query($db, "SELECT id, DATUM FROM razpisani_tecaji WHERE VRSTA = '3'");
                              while ($row = $sql->fetch_assoc()){
                                  $row['DATUM'] = new DateTime($row['DATUM']);
                                                        $dateFormated =  $row['DATUM']->format('d.m.Y');
                                echo "<option value='" . $row['id'] . "'>" . $dateFormated ."</option>";

                            }
                            ?>
                        </select>
                    </form>
                    <br>
                    <div id="txtHint"><b></b></div><br><br>
                    <div id="txtHint2"><b></b></div><br><br>
                    <div id="txtHint3"><b></b></div><br><br>
                </section>
                    <div class="shell offset-top-66 text-left"></div>
                    <div class="code-counter-type-3"></div>
                <!-- Section Input Group Multiple-->
                <!-- Page Footers-->
                <?php include("../footer.html");?>
                
        </div>
        <!-- JavaScript-->
        <script src="../js/core.min.js"></script>
        <script src="../js/script.js"></script>

    </body>

    </html>