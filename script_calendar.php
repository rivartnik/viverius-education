<?php
try {

    $connection = new PDO('mysql:host=localhost;dbname=viverius_education','root', '');


    // Prepare and execute query
    $query = "SELECT * FROM razpisani_tecaji WHERE STATUS = 'odprt'";
    $sth = $connection->prepare($query);
    $sth->execute();

    // Returning array
    $events = array();


    // Fetch results
    while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {

        if ($row['VRSTA'] == 1) $type = "OKP" and $color='#dd6a2c';
        if ($row['VRSTA'] == 2) $type = "OPS" and $color='#026DB5';
        if ($row['VRSTA'] == 3) $type = "ODS" and $color='#8B8B8B';

        $e = array();
        $e['id'] = $row['ID_TECAJA'];
        $e['title'] = $type;
        $e['start'] = $row['DATUM'] ."T" . $row['HOUR'];
        $e['color'] = $color;
        $e['allDay'] = false;

        // Merge the event array into the return array
        array_push($events, $e);

    }

    // Output json for our calendar
    echo json_encode($events);
    exit();

} catch (PDOException $e){
    echo $e->getMessage();
}
?>
