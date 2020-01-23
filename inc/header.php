<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://kit.fontawesome.com/ccdb885e15.js" crossorigin="anonymous"></script>

    <title>NETSCAN</title>

</head>

<body>
<?php // var_dump($_SESSION);  ?>
<header class="header_accueil">
    <nav class="topnav" id="myTopnav">
        <ul>
            <li><a class="logo2" href="index.php"><img class="logo" src="assets/img/logo.png" alt=""></a></li>
            <li><a href="index.php" class="active" >Home</a></li>
            <?php if (!is_logged()) { ?>
                <li><a href="login.php">Connexion</a></li>
                <li><a href="register.php">Inscription</a></li>
            <?php } else { ?>
                <li><a href="trame.php">Stat Me!</a></li>
                <li><a href="deconnexion.php">Deconnexion</a></li>
            <?php } ?>
        </ul>
    </nav>
    <a class="un" href="#factory">
        <div class="icons"><img src="assets/img/icons8-about-96.png"></div>
    </a>
    <a class="deux" href="#squad">
        <div class="icons"><img src="assets/img/icons8-microsoft-teams-96.png"></div>
    </a>
    <a class="trois" href="#contact">
        <div class="icons"><img src="assets/img/icons8-contact-96.png"></div>
    </a>
</header>
