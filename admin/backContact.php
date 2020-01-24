<?php
session_start();
include('../inc/pdo.php');
include('../inc/function.php');

include('backheader.php');
if (!empty($_SESSION['login']['role']==="admin")) {
    $sql = "SELECT * FROM contact
        WHERE 1";


    $query = $pdo->prepare($sql);
    $query->execute();
    $contacts = $query->fetchAll();
    ?>


    <div id="page-wrapper">
    <div id="page-inner">
    <div class="col-lg-6 col-md-6">
    <h5>Messages envoyés via le formulaire de contact.</h5>
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

