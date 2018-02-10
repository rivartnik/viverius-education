<?php

            include("../config.php");
            session_start();
            if (!$db) {
              die('Could not connect: ' . mysqli_error($db));
            }
                  $sql="select registrirani_clani.*,razpisani_tecaji.*
                  from registrirani_clani
                  left join razpisani_tecaji ON razpisani_tecaji.id = registrirani_clani.OKP OR  razpisani_tecaji.id =registrirani_clani.OPS OR razpisani_tecaji.id =registrirani_clani.ODS
                  ORDER BY DATUM desc";
                  $result = mysqli_query($db,$sql);

                              echo "
                              <thead>
                              <tr>
                                <th>ST.</th>
                                <th>Ime</th>
                                <th>Priimek</th>
                                <th>Email</th>
                                <th>Telefonska</th>
                                <th>Ustanova</th>
                                <th>Status</th>
                                <th>DATUM</th>
                                <th>VRSTA</th>
                              </tr></thead>
                              <tbody>";

                                      while($row = mysqli_fetch_array($result))
                                      {
                                        if ($row['VRSTA'] == 1) $date="Online klinicni primeri";
                                        if ($row['VRSTA'] == 2)  $date="Online priprave na strokovni izpit";
                                        if ($row['VRSTA'] == 3)  $date="Online delavnice za studente medicine";

                                        $row['DATUM'] = new DateTime($row['DATUM']);
                                        $dateFormated =  $row['DATUM']->format('d.m.Y');

                                        echo "<tr>";
                                        echo "<td>" . $row['ID_TECAJNIKA'] . "</td>";
                                        echo "<td>" . $row['IME'] . "</td>";
                                        echo "<td>" . $row['PRIIMEK'] . "</td>";
                                        echo "<td>" . $row['EMAIL'] . "</td>";
                                        echo "<td>" . $row['TELEFON'] . "</td>";
                                        echo "<td>" . $row['KRAJ_DELOVANJA'] . "</td>";
                                        echo "<td>" . $row['STATUS_CLANA'] . "</td>";
                                        echo "<td>" . $dateFormated . "</td>";
                                        if($row['VRSTA'] == 1){ echo '<td style="background-color:#dd6a2c">' . $date ."</td>";}
                                        else if($row['VRSTA'] == 2){ echo '<td style="background-color:#026DB5">' . $date ."</td>";}
                                        else if($row['VRSTA'] == 3){ echo '<td style="background-color:#8B8B8B">' . $date ."</td>";}

                                        echo "</tr>";
                                      }
                                      echo "</tbody>";

                        mysqli_close($db);
                        ?>
