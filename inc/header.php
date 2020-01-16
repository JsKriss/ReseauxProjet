<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://kit.fontawesome.com/ccdb885e15.js" crossorigin="anonymous"></script>
    <title>NETSCAN</title>
</head>

<body>
<?php // var_dump($_SESSION);  ?>
<header class="header">

    <div class="image">
        <nav class="topnav" id="myTopnav">
            <a href="index.php" class="active">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <?php if (!is_logged()) { ?>
            <a href="login.php">Connexion</a>
            <a href="register.php">Inscription</a>
            <?php } else { ?>
            <a href="trame.php">Stat Me!</a>
            <a href="deconnexion.php">Deconnexion</a>
            <?php } ?>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
        <a class="un" href="#" > <div class="icons"> <i class="fas fa-info-circle"></i></div></a>
        <a class="deux" href="#" > <div class="icons"> <i class="fas fa-user-tie"></i> </div></a>
        <a class="trois" href="#" > <div class="icons"> <i class="fas fa-comments"></i> </div></a>
    </div>
</header>
