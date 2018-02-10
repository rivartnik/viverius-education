<?php

$q = intval($_GET['q']);

include("../config.php");
session_start();

if (!$db) {
    die('Could not connect: ' . mysqli_error($db));
}

$sql="select registrirani_clani.*,razpisani_tecaji.*
from registrirani_clani
left join razpisani_tecaji ON razpisani_tecaji.id = registrirani_clani.OKP
where razpisani_tecaji.id = '".$q."'";
$result = mysqli_query($db,$sql);

echo "<table>
<caption>Tečaj: Online klinicni primeri</caption>
<tr>
<th>Ime</th>
<th>Priimek</th>
<th>Email</th>
<th>Telefonska</th>
<th>Ustanova</th>
<th>Status</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['IME'] . "</td>";
    echo "<td>" . $row['PRIIMEK'] . "</td>";
    echo "<td>" . $row['EMAIL'] . "</td>";
    echo "<td>" . $row['TELEFON'] . "</td>";
     echo "<td>" . $row['KRAJ_DELOVANJA'] . "</td>";
    echo "<td>" . $row['STATUS_CLANA'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($db);
?>