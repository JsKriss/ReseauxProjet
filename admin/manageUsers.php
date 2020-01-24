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
 ?>

    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-lg-6 col-md-6">
                <h5>Liste des utilisateurs</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pseudo</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Date de création</th>
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






