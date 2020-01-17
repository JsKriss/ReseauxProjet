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
<header class="header_accueil">
    <div class="box_logo">
        <a href=""><img src="assets/img/logo.png" alt=""></a>
    </div>
    <nav class="topnav" id="myTopnav">
        <ul class="nav navbar">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <?php if (!is_logged()) { ?>
                <li><a href="login.php">Connexion</a></li>
                <li><a href="register.php">Inscription</a></li>
            <?php } else { ?>
                <li><a href="trame.php">Stat Me!</a></li>
                <li><a href="deconnexion.php">Deconnexion</a></li>
            <?php } ?>
            <div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
            </div>
        </ul>
    </nav>
    <div id="shakeIcons" class="icons">
        <a class="un" href=""><i class="fas fa-info-circle"></i></a>
    </div>
    <div id="shakeIcons" class="icons">
        <a class="deux" href=""><i class="fas fa-user-tie"></i></a>
    </div>
    <div id="shakeIcons" class="icons">
        <a class="trois" href=""><i class="fas fa-comments"></i></a>
    </div>
</header>
