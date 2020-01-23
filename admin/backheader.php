<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Panel Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assetsAdmin/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="../assetsAdmin/css/font-awesome.css" rel="stylesheet"/>
    <!-- CUSTOM STYLES-->
    <link href="../assetsAdmin/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>
<body>
<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logout-spn" href="../index.php">NETSCAN</a>
            </div>

            <span class="logout-spn">
                  <a href="../deconnexion.php" style="color:#fff;">LOGOUT</a>

                </span>
        </div>
    </div>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">


                <li>
                    <a href="manageUsers.php"><i class="fa fa-desktop "></i>Dashboard</a>
                </li>


                <li>
                    <a href="approveUsers.php"><i class="fa fa-table "></i>Utilisateurs en attente d'approbation</a>
                </li>
                <li class="active-link">
                    <a href="trash.php"><i class="fa fa-edit "></i>Corbeille</a>
                </li>


                <li>
                    <a href="backContact.php"><i class="fa fa-qrcode "></i>Contact</a>
                </li>
                <li>
                    <a href="../index.php"><i class="fa fa-desktop"></i>Retour au site</a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
