<?php
session_start();
require('inc/pdo.php');
require('inc/function.php');
$title = 'MDP oublié';
$errors = array();
$success = false;
if(!empty($_POST['submitted'])) {
  // faille XS
  $email = trim(strip_tags($_POST['email']));
  $sql = "SELECT email, token FROM users WHERE email = :email";
  $query = $pdo->prepare($sql);
  $query->bindValue(':email', $email, PDO::PARAM_STR);
  $query->execute();
  $user = $query->fetch();
  if(!empty($user)) {
    $token = $user['token'];
    $email = urlencode($email);
    $html = '<div id="sub-modal" class="modal_form transition"><p>Veuillez cliquer sur lien pour changer de mot de passe : <a href="modif-password.php?email='.$email.'&token='.$token.'">REDIRECTION</a></p></div>';
    echo $html;


    //mail
    // $html
  } else {
    $errors['email'] = 'Veuillez rentrer un email valide !';
  }
} //fin

include('inc/header.php'); ?>

    <div id="sub-modal" class="forgetMDP">
        <h1>MDP Oublié</h1>

        <form  class="form forget" action="forget_password.php" method="post">
            <p class="label"><label for="email">Email *</label></p>
            <br>
            <input type="text" name="email" value="<?php if (!empty($_POST['email'])) {
                echo $_POST['email'];
            } ?>">
            <p class="error"><?php if (!empty($errors['email'])) {
                    echo $errors['email'];
                } ?></p>

            <input id="submit" type="submit" name="submitted" value="Envoyer">
        </form>
    </div>

<?php
include('inc/footer.php');
