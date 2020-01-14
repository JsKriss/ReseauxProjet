<?php

$fichier = file_get_contents('files/trameReseau.json');

$json = json_decode($fichier, true);

echo '<pre>';
print_r($json);
echo '</pre>';
?>
<!--<table>-->
<!--    <caption></caption>-->
<!--    --><?php //$keys = array_keys($json[0]) ?>
<!--    <thead>-->
<!--    <tr>-->
<!--        --><?php //foreach($keys as $key) { ?>
<!--            <th>--><?php //echo $key ?><!--</th>-->
<!--        --><?php //} ?>
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach($json as $tab) { ?>
<!--        <tr>-->
<!--            --><?php //foreach($tab as $value) { ?>
<!--                <td>--><?php //echo $value; ?><!--</td>-->
<!--            --><?php //} ?>
<!--        </tr>-->
<!--    --><?php //} ?>
<!--    </tbody>-->
<!--</table>-->
