<?php
include('../inc/pdo.php');
include('../inc/function.php');


if (!empty($_GET['t'])){
    $token = $_GET['t'];
    deleteUser($token);
    header("Location: manageUsers.php");
} else {
    header("Location: ../403.php");
}
