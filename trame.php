<?php
$fichier = file_get_contents('files/trameReseau.json');
$json = json_decode($fichier, true);
//    echo "<pre>";
//    var_dump($json[0]);
//    echo "</pre>";

require("inc/header.php"); ?>


    <table id="tableau">
        <thead>
        <th>Date et heure</th>
        <th>Adresse IP Source</th>
        <th>Adresse IP Destination</th>
        <th>Adresse MAC Source</th>
        <th>Adresse MAC Destination</th>
        <th>Protocole</th>
        <th>Port Source</th>
        <th>Port Destination</th>

        </thead>
        <tbody>
        <?php
        $nb = count($json);
        $udp = 0;
        $tcp = 0;
        for ($i = 0; $i < $nb; $i++) {
            echo '<tr>';
            $row = $json[$i]['_source']['layers'];
            if  (isset($row['frame'])){
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
            }else if (isset($row['tcp'])) {
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
        ?>
        </tbody>
    </table>

<?php require("inc/footer.php");