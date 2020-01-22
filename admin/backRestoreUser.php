<?php
include('../inc/pdo.php');
include('../inc/function.php');


if (!empty($_GET['t'])){
    $token = $_GET['t'];
    restoreUser($token);
    header("Location: trash.php");
} else {
    header("Location: ../403.php");
}
