<?php
session_start();
include('../inc/pdo.php');
include('../inc/function.php');

include('backheader.php');

if (!empty($_SESSION['login']['role']==="admin")) {


$sql = "SELECT * FROM users
        WHERE actif = '1' AND role = 'user'";


$query = $pdo->prepare($sql);
$query->execute();
$users = $query->fetchAll();
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
                            <th>Pseudo</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Date de création</th>
                            <th>Edit</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($users as $user) { ?>
                            <tr class="success">
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['pseudo'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['role'] ?></td>
                                <td><?php echo $user['created_at'] ?></td>
                                <td><a href="" id="editAdmin">Edit</a></td>
                                <td><a href="backDeleteUser.php?t=<?php echo $user['token']; ?>">Supprimer</a></td>
                            </tr>
                        <?php }
                        } else {
                            header('Location: ../403.php');
                        } ?>
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
<?php
include('backfooter.php');






