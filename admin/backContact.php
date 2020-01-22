<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Simple Responsive Admin</title>
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
<?php
include('../inc/pdo.php');
include('../inc/function.php');

$title = 'show users';

$sql = "SELECT * FROM contact
        WHERE 1";


$query = $pdo->prepare($sql);
$query->execute();
$contacts = $query->fetchAll();
//debug($users); ?>


<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="../assetsAdmin/img/logo.png"/>
                </a>
            </div>

            <span class="logout-spn">
                  <a href="#" style="color:#fff;">LOGOUT</a>

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
                    <a href="#"><i class="fa fa-qrcode "></i>Contact</a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-lg-6 col-md-6">
                <h5>Liste des utilisateurs actifs</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date d'envoi</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($contacts as $contact) { ?>
                            <tr class="success">
                                <td><?php echo $contact['id'] ?></td>
                                <td><?php echo $contact['ctc_nom'] ?></td>
                                <td><?php echo $contact['ctc_prenom'] ?></td>
                                <td><?php echo $contact['ctc_email'] ?></td>
                                <td><?php echo $contact['ctc_message'] ?></td>
                                <td><?php echo $contact['ctc_created_at'] ?></td>
                                <td><a href="backDeleteMessage.php?id=<?php echo $contact['id']; ?>">Supprimer</a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <hr/>

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

</div>
<div class="footer">


    <div class="row">
        <div class="col-lg-12">
            &copy; 2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"
                                                       target="_blank">www.binarytheme.com</a>
        </div>
    </div>
</div>


<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="../assetsAdmin/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="../assetsAdmin/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="../assetsAdmin/js/custom.js"></script>


</body>
</html>

