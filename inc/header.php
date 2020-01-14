<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css">
    <title></title>
</head>
<body>
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
            <a href="stats.php">Stat Me!</a>
            <a href="deconnexion.php">Deconnexion</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <?php } ?>
        </nav>
    </div>
</header>
