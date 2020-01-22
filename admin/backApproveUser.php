<?php
include('../inc/pdo.php');
include('../inc/function.php');


if (!empty($_GET['t'])){
    $token = $_GET['t'];
    approveUser($token);
    header("Location: approveUsers.php");
} else {
    header("Location: ../403.php");
}
