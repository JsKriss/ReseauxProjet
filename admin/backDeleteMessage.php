<?php
include('../inc/pdo.php');
include('../inc/function.php');


if (!empty($_GET['id']) && is_numeric($_GET['id']) ){
    $token = $_GET['id'];
    deleteMessage($token);
    header("Location: backContact.php");
} else {
    header("Location: ../403.php");
}
