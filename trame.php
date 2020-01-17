<?php session_start() ?>
<link rel="stylesheet" href="assets/css/table.css">
<?php
require('inc/function.php');
$fichier = file_get_contents('files/trameReseau.json');
$json = json_decode($fichier, true);
//debug($json);

require("inc/header.php"); ?>

<canvas id="myChart"></canvas>
<canvas id="chartMac"></canvas>

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
                    $apple = 0;
                    $wd = 0;
                    $autres = 0;
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
                            if($json[$i]['_source']['layers']['eth']['eth.src_tree']['eth.addr.oui_resolved'] == 'Apple, Inc.') {
                                $apple++;
                                //echo($apple);
                            } else if($json[$i]['_source']['layers']['eth']['eth.src_tree']['eth.addr.oui_resolved'] == 'Intel Corporate') {
//                                $wd++;
                                echo($wd);
                            } else {
                                $autres++;
//                                echo($autres);
                            }
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
                data: [<?=$udp?>, <?=$tcp?>],
                backgroundColor: [
                    'rgba(255, 165, 0, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 165, 0, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {

        }
    });

    var ctx2 = document.getElementById('chartMac').getContext('2d');
    var chartMac = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Apple', 'Intel', 'Autres'],
            datasets: [{
                label: 'Types de connexions',
                data: [<?=$apple?>, <?=$wd?>, <?=$autres?>],
                backgroundColor: [
                    'rgba(255, 165, 0, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(155, 155, 155,0.2)'
                ],
                borderColor: [
                    'rgba(255, 165, 0, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(155, 155, 155,1)'
                ],

                borderWidth: 1
            }]
        },
        options: {

        }
    });

</script>


<?php require("inc/footer.php");