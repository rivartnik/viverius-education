<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
session_start();
if($_SESSION["loggedIn"] != true) {
    echo("Access denied!");
    exit();
}
echo("Access granted!");
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>EditableGrid Demo - Database Link</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">

  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
  <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" media="screen">

</head>

<body>

  <div id="message"></div>
  <div id="wrap">
    <h1>Viverius education - Tečaji</h1>

    
    <div id="toolbar">
    <button type="button">Dodajanje termina</button>
    <button type="button">Pregled prijav</button>
    </div><br>
    <!-- Feedback message zone -->


    <div id="toolbar">
      <a id="showaddformbutton" class="button green">
        <i class="fa fa-plus"></i> Add new row</a>
        <p>1. OKP - splosne teme, <br> 2. OKP - gibala in kronicna bolecina,<br>3. OKP - kardiovaskularni sistem,<br>4. OPS<br>5. ODS<br> </p>
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

</body>

</html>