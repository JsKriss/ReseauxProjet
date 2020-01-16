<?php
session_start();
require('inc/function.php');
require('inc/header.php');
?>
<canvas id="myChart"></canvas>
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
</script>

<?php
require('inc/footer.php');
?>