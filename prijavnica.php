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
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>
        $('#button_send_data').on('click', function () {

            // create variables
            var select1 = $('#prijava_okp');
            var select2 = $('#prijava_ops');
            var select3 = $('#prijava_ods');

            // validate form
            if (select1.val() == '' && select2.val() == '' && select3.val() == '') {

                alert('Izbrati morate vsaj en tečaj!');
                return false; // do not submit

            }
            else {
                return true; // submit form
            }

        }); </script>

    <script> 
        $(document).ready(function () {
            $('#okpswitch').change(function () {
                var okpSelect  =  document.getElementById('prijava_okp');
               // var defText = okpSelect[0].innerHTML;
                if (!this.checked){
                    $('#selectOKP').fadeOut('slow');
                    okpSelect.selectedIndex = 0;
                    }
                else  {
                    $('#selectOKP').fadeIn('slow');
                }
            });
            $('#opsswitch').change(function () {
                if (!this.checked)
                    $('#selectOPS').fadeOut('slow');
                else
                    $('#selectOPS').fadeIn('slow');
            });
            $('#odsswitch').change(function () {
                if (!this.checked)
                    $('#selectODS').fadeOut('slow');
                else
                    $('#selectODS').fadeIn('slow');
            });
        });
    </script>
  
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
                        <h3>
                            <span class="big">Prijava na tečaj</span>
                        </h3>
                    </div>
                    <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
                        <ul class="list-inline list-inline-dashed p">
                            <li>
                                <a href="index.php">Domov</a>
                            </li>
                            <li>
                                <a href="storitve.php">Tečaji</a>
                            </li>
                            <li>Prijava na tečaj
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <main class="page-content section-top-20 section-sm-top-50">
        <section>
    
            <div class="shell">
                <div class="range range-sm-center">
                    <div class="cell-sm-12 cell-md-12">
                        <div class="form-group" style="text-align: center">
                            <h5>Prijavljam se na: (ustrezno označi)</h5>
                            <label class="toggle-inline">
                                <input class="toggle-custom" id="okpswitch" type="checkbox" checked>Online klinični primeri
                            </label>
                            <label class="toggle-inline">
                                <input class="toggle-custom" id="opsswitch" type="checkbox">Online priprave na strokovni izpit
                            </label>
                            <label class="toggle-inline">
                                <input class="toggle-custom" id="odsswitch" type="checkbox">Online delavnice za študente medicine
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <form class="rd-mailform text-left" method="post" action="backend/DB_prijavnica.php">
                <div class="shell">
                    <hr class="divider divider-sm bg-mantis">
                    <div class="range range-sm-middle range-sm-center">
                        <div style="padding-right:140px">
                        <div class="cell-sm-4 cell-md-4">
                            <div class="form-group">
                                <div style="display: block" id="selectOKP">
                                    <select name="prijava_okp" data-minimum-results-for-search="Infinity" id="prijava_okp">
                                        <option value="" selected="selected">Online klinični primeri </option>
                                        <?php
                                                include("config.php");
                                                session_start();
                                                if (!$db) {
                                                  die('Could not connect: ' . mysqli_error($db));
                                                }
                                                $sql = mysqli_query($db, "SELECT id, DATUM, HOUR FROM razpisani_tecaji WHERE STATUS ='odprt' AND ST_ODPRTIH_MEST>0 AND VRSTA=1");
                                                while ($row = $sql->fetch_assoc()){
                                                  $row['DATUM'] = new DateTime($row['DATUM']);
                                                  $dateFormated =  $row['DATUM']->format('d.m.Y');
    
                                                  echo "<option value='" . $row['id'] . "'>" . $dateFormated," ","ob"," ", $row['HOUR'] . "</option>";
    
                                                }
                                              ?>
                                    </select>
                                </div>
                                <div style="display: none" id="selectOPS">
                                    <select name="prijava_ops" class="form-control select-filter" data-placeholder="Online priprave na strokovni izpit" data-minimum-results-for-search="Infinity"
                                        id="prijava_ops">
                                        <option value="" selected="selected">Online priprave na strokovni izpit </option>
                                        <?php
                                              include("config.php");
                                              session_start();
                                              if (!$db) {
                                                die('Could not connect: ' . mysqli_error($db));
                                              }
                                              $sql = mysqli_query($db, "SELECT id, DATUM, HOUR FROM razpisani_tecaji WHERE STATUS ='odprt' AND ST_ODPRTIH_MEST>0 AND VRSTA=2");
                                              while ($row = $sql->fetch_assoc()){
                                                $row['DATUM'] = new DateTime($row['DATUM']);
                                                $dateFormated =  $row['DATUM']->format('d.m.Y');
                      
                                                echo "<option value='" . $row['id'] . "'>" . $dateFormated," ","ob"," ", $row['HOUR'] . "</option>";
                      
                                              }
                                            ?>
                                    </select>
                                </div>
                                <div style="display: none" id="selectODS">
                                    <select name="prijava_ods" class="form-control select-filter" data-placeholder="Online delavnice za študente medicine" data-minimum-results-for-search="Infinity"
                                        id="prijava_ods">
                                        <option value="" selected="selected">Online delavnice za študente medicine</option>
                                        <?php
                                                  include("config.php");
                                                  session_start();
                                                  if (!$db) {
                                                    die('Could not connect: ' . mysqli_error($db));
                                                  }
                                                  $sql = mysqli_query($db, "SELECT id, DATUM, HOUR FROM razpisani_tecaji WHERE STATUS ='odprt' AND ST_ODPRTIH_MEST>0 AND VRSTA=3");
                                                  while ($row = $sql->fetch_assoc()){
                                                    $row['DATUM'] = new DateTime($row['DATUM']);
                                                    $dateFormated =  $row['DATUM']->format('d.m.Y');
    
                                                    echo "<option value='" . $row['id'] . "'>" . $dateFormated," ","ob"," ", $row['HOUR'] . "</option>";
    
                                                  }
                                                  ?>
                                    </select>
                                </div>
                                <div class="shell offset-top-20 text-left"> 
                                </div>
                            </div>
                        </div>
                                                </div>
                        <div class="rd-calendar-small">
    <div class="rd-calendar">
        <div class="rdc-panel">
            <a class="rdc-next"></a>
            <a class="rdc-prev"></a>
            <div class="rdc-month"></div>
            <div class="rdc-fullyear"></div>
        </div>
        <div class="rdc-table"></div>
        <div class="rdc-events text-left">
            <a class="rdc-events_close"></a>
            <ul>
                <li class="rdc-event" data-date="01/01/2018">
                    <div class="rdc-event-wrap bg-blue-gray context-dark">
                        <article class="post widget-event">
                            <div class="post-meta">
                                <span class="icon icon-xxs text-picton-blue mdi mdi-clock"></span>
                                <time class="text-dark" datetime="2016-01-01">10:00 AM</time>
                            </div>
                            <div class="post-title">
                                <h6 class="text-regular">
                                    <a href="#">International Conference</a>
                                </h6>
                            </div>
                        </article>
                    </div>
                </li>
                <li class="rdc-event" data-date="01/02/2018">
                    <div class="rdc-event-wrap bg-blue-gray context-dark">
                        <article class="post widget-event">
                            <div class="post-meta">
                                <span class="icon icon-xxs text-picton-blue mdi mdi-clock"></span>
                                <time class="text-dark" datetime="2016-01-01">10:00 am</time>
                            </div>
                            <div class="post-title">
                                <h6 class="text-regular">
                                    <a href="#">International Conference Day 2</a>
                                </h6>
                            </div>
                        </article>
                    </div>
                </li>
                <li class="rdc-event" data-date="04/19/2016">
                    <div class="rdc-event-wrap bg-mantis context-dark">
                        <article class="post widget-event">
                            <div class="post-meta">
                                <span class="icon icon-xxs text-picton-blue mdi mdi-clock"></span>
                                <time class="text-dark" datetime="2016-01-01">9:00 AM</time>
                            </div>
                            <div class="post-title">
                                <h6 class="text-regular">
                                    <a href="#">Opening of the exhibition</a>
                                </h6>
                            </div>
                        </article>
                    </div>
                </li>
                <li class="rdc-event" data-date="04/28/2016">
                    <div class="rdc-event-wrap bg-mantis context-dark">
                        <article class="post widget-event">
                            <div class="post-meta">
                                <span class="icon icon-xxs text-picton-blue mdi mdi-clock"></span>
                                <time class="text-dark" datetime="2016-01-01">6:00 pm</time>
                            </div>
                            <div class="post-title">
                                <h6 class="text-regular">
                                    <a href="#">Exhibition closing</a>
                                </h6>
                            </div>
                        </article>
                    </div>
                </li>
                <li class="rdc-event" data-date="04/29/2016">
                    <div class="rdc-event-wrap bg-saffron context-dark">
                        <article class="post widget-event">
                            <div class="post-meta">
                                <span class="icon icon-xxs text-picton-blue mdi mdi-clock"></span>
                                <time class="text-dark" datetime="2016-01-01">9:00 AM</time>
                            </div>
                            <div class="post-title">
                                <h6 class="text-regular">
                                    <a href="#">Family breakfast</a>
                                </h6>
                            </div>
                        </article>
                    </div>
                </li>
                <li class="rdc-event" data-date="05/05/2016">
                    <div class="rdc-event-wrap bg-blue-gray context-dark">
                        <article class="post widget-event">
                            <div class="post-meta">
                                <span class="icon icon-xxs text-picton-blue mdi mdi-clock"></span>
                                <time class="text-dark" datetime="2016-01-01">10:00 am</time>
                            </div>
                            <div class="post-title">
                                <h6 class="text-regular">
                                    <a href="#">International Conference</a>
                                </h6>
                            </div>
                        </article>
                    </div>
                </li>
                <li class="rdc-event" data-date="05/16/2016">
                    <div class="rdc-event-wrap bg-blue-gray context-dark">
                        <article class="post widget-event">
                            <div class="post-meta">
                                <span class="icon icon-xxs text-picton-blue mdi mdi-clock"></span>
                                <time class="text-dark" datetime="2016-01-01">10:00 am</time>
                            </div>
                            <div class="post-title">
                                <h6 class="text-regular">
                                    <a href="#">International Conference</a>
                                </h6>
                            </div>
                        </article>
                    </div>
                </li>
                <li class="rdc-event" data-date="05/17/2016">
                    <div class="rdc-event-wrap bg-blue-gray context-dark">
                        <article class="post widget-event">
                            <div class="post-meta">
                                <span class="icon icon-xxs text-picton-blue mdi mdi-clock"></span>
                                <time class="text-dark" datetime="2016-01-01">10:00 am</time>
                            </div>
                            <div class="post-title">
                                <h6 class="text-regular">
                                    <a href="#">International Conference Day 2</a>
                                </h6>
                            </div>
                        </article>
                    </div>
                </li>
                <li class="rdc-event" data-date="05/19/2016">
                    <div class="rdc-event-wrap bg-mantis context-dark">
                        <article class="post widget-event">
                            <div class="post-meta">
                                <span class="icon icon-xxs text-picton-blue mdi mdi-clock"></span>
                                <time class="text-dark" datetime="2016-01-01">9:00 AM</time>
                            </div>
                            <div class="post-title">
                                <h6 class="text-regular">
                                    <a href="#">Opening of the exhibition</a>
                                </h6>
                            </div>
                        </article>
                    </div>
                </li>
                <li class="rdc-event" data-date="05/28/2016">
                    <div class="rdc-event-wrap bg-mantis context-dark">
                        <article class="post widget-event">
                            <div class="post-meta">
                                <span class="icon icon-xxs text-picton-blue mdi mdi-clock"></span>
                                <time class="text-dark" datetime="2016-01-01">6:00 pm</time>
                            </div>
                            <div class="post-title">
                                <h6 class="text-regular">
                                    <a href="#">Exhibition closing</a>
                                </h6>
                            </div>
                        </article>
                    </div>
                </li>
                <li class="rdc-event" data-date="05/23/2016">
                    <div class="rdc-event-wrap bg-saffron context-dark">
                        <article class="post widget-event">
                            <div class="post-meta">
                                <span class="icon icon-xxs text-picton-blue mdi mdi-clock"></span>
                                <time class="text-dark" datetime="2016-01-01">9:00 AM</time>
                            </div>
                            <div class="post-title">
                                <h6 class="text-regular">
                                    <a href="#">Family breakfast</a>
                                </h6>
                            </div>
                        </article>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

                    </div>
                        <div class="shell">
                            <div class="range range-xs-center">
                                <div class="cell-sm-8 cell-md-7 cell-lg-8">
                                    <div class="range">
    
                                        <div class="cell-lg-6">
                                            <div class="form-group">
                                                <label class="form-label form-label-outside" for="make-appointment-name">Ime:</label>
                                                <input class="form-control" id="make-appointment-name" type="text" name="NAME" data-constraints="@Required">
                                            </div>
                                        </div>
                                        <div class="cell-lg-6">
                                            <div class="form-group">
                                                <label class="form-label form-label-outside" for="make-appointment-surname">Priimek:</label>
                                                <input class="form-control" id="make-appointment-surname" type="text" name="SURNAME" data-constraints="@Required">
                                            </div>
                                        </div>
                                        <div class="cell-lg-6 offset-top-20 ">
                                            <div class="form-group">
                                                <label class="form-label form-label-outside" for="make-appointment-email">Email:</label>
                                                <input class="form-control" id="make-appointment-email" type="text" name="EMAIL" data-constraints="@Required @Email">
                                            </div>
                                        </div>
                                        <div class="cell-lg-6 offset-top-20">
                                            <div class="form-group">
                                                <label class="form-label form-label-outside" for="make-appointment-name">Status / izobrazba</label>
                                                <select name="EDUCATION" class="form-control select-filter" data-minimum-results-for-search="Infinity" data-constraints="@Required @Selected">
                                                    <option value="" selected="selected"></option>
                                                    <option>Študent</option>
                                                    <option>Pripravnik</option>
                                                    <option>Specializant</option>
                                                    <option>Sprecialist</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="cell-lg-6 offset-top-20 ">
                                            <div class="form-group">
                                                <label class="form-label form-label-outside" for="make-appointment-phone">Telefon:</label>
                                                <input class="form-control" id="make-appointment-phone" type="text" name="PHONE" data-constraints="@Required">
                                            </div>
                                        </div>
                                        <div class="cell-lg-6 offset-top-20 ">
                                            <div class="form-group">
                                                <label class="form-label form-label-outside" for="make-appointment-placeofwork">Kraj delovanja (damo dropdown vsi SLO kraji):</label>
                                                <input class="form-control" id="make-appointment-placeofwork" type="text" name="PLACEOFWORK" data-constraints="@Required">
                                            </div>
                                        </div>
    
                                    </div>
                                    <div class="text-center text-lg-left offset-top-30">
                                        <button class="btn btn-primary" id="button_send_data" type="submit">Prijava na tečaj</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
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