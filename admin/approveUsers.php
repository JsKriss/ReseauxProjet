<?php
include('../inc/pdo.php');
include('../inc/function.php');

include('backheader.php');

$sql = "SELECT * FROM users
        WHERE role = 'newuser'";


$query = $pdo->prepare($sql);
$query->execute();
$users = $query->fetchAll();
 ?>


    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-lg-6 col-md-6">
                <h5>Utilisateurs en attente d'approbation</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pseudo</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Date de création</th>
                            <th>Approuver</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($users as $user) {
                            if($user['role'] == 'newuser') {?>
                            <tr class="success">
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['pseudo'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['role'] ?></td>
                                <td><?php echo $user['created_at'] ?></td>
                                <td><a href="backApproveUser.php?t=<?php echo $user['token']; ?>" id="approve">Approuver</a></td>
                            </tr>
                        <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

</div>
<?php
include('backfooter.php');







