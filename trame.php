<link rel="stylesheet" href="assets/css/table.css">
<?php
require('inc/function.php');
$fichier = file_get_contents('files/trameReseau.json');
$json = json_decode($fichier, true);
//    echo "<pre>";
//    var_dump($json[0]);
//    echo "</pre>";

require("inc/header.php"); ?>

<canvas id="myChart" width="400" height="400"></canvas>

<div class="wrap-tableau">
    <div class="container">
        <div class="wrap-tableau2">
            <div class="tableau">
                <table id="tableau">
                    <thead>
                        <tr class="headtableau">
                            <th>Date et heure</th>
                            <th>Adresse IP Source</th>
                            <th>Adresse IP Destination</th>
                            <th>Adresse MAC Source</th>
                            <th>Adresse MAC Destination</th>
                            <th>Protocole</th>
                            <th>Port Source</th>
                            <th>Port Destination</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $tcp = 0;
                    $udp = 0;
                    $count = count($json);
                    //        if(is_logged()) {
                    for ($i = 0; $i < $count; $i++) {
                        echo '<tr>';
                        $row = $json[$i]['_source']['layers'];
                        if (isset($row['frame'])) {
                            echo '<td>' . $json[$i]['_source']['layers']['frame']['frame.time'] . '</td>';
                        } else {
                            echo '<td></td>';
                        }
                        if (isset($row['ip'])) {
                            echo '<td>' . $json[$i]['_source']['layers']['ip']['ip.src'] . '</td>';
                            echo '<td>' . $json[$i]['_source']['layers']['ip']['ip.dst'] . '</td>';
                        } else {
                            echo '<td></td>';
                            echo '<td></td>';
                        }
                        if (isset($row['eth'])) {
                            echo '<td>' . $json[$i]['_source']['layers']['eth']['eth.src'] . '</td>';
                            echo '<td>' . $json[$i]['_source']['layers']['eth']['eth.dst'] . '</td>';
                        } else {
                            echo '<td></td>';
                            echo '<td></td>';
                        }
                        if (isset($row['udp'])) {
                            echo '<td>UDP</td>';
                            echo '<td>' . $json[$i]['_source']['layers']['udp']['udp.srcport'] . '</td>';
                            echo '<td>' . $json[$i]['_source']['layers']['udp']['udp.dstport'] . '</td>';
                            $udp++;
                        } else if (isset($row['tcp'])) {
                            echo '<td>TCP</td>';
                            echo '<td>' . $json[$i]['_source']['layers']['tcp']['tcp.srcport'] . '</td>';
                            echo '<td>' . $json[$i]['_source']['layers']['tcp']['tcp.dstport'] . '</td>';
                            $tcp++;
                        } else {
                            echo '<td></td>';
                            echo '<td></td>';
                            echo '<td></td>';
                        }
                        echo '</tr>';
                    }
                    //        } else {
                    //            header('Location: 403.php');
                    //        }

                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['TCP', 'UDP'],
            datasets: [{
                label: 'Types de connexions',
                data: [<?=$tcp?>, <?=$udp?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>


<?php require("inc/footer.php");