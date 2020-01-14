<?php
require('inc/pdo.php');
require('inc/function.php');

$title = 'Modifier votre mot de passe';
$errors = array();
$success = false;

// traitement formulaire
if(!empty($_GET['token']) && !empty($_GET['email'])) {
  $token = trim(strip_tags($_GET['token']));
  $email = trim(strip_tags($_GET['email']));
  $email = urldecode($email);
  $sql = "SELECT * FROM users WHERE email = :email AND token = :token";
  $query = $pdo->prepare($sql);
  $query->bindValue(':email', $email, );
}

include('inc/header.php'); ?>

<h1>Modifier votre mot de passe</h1>

<form class="" action="" method="get">
  <label for="password1">Nouveau mot de passe *</label>
  <input type="password" name="password1" id="password1" value="<?php if(!empty($GET['passwword'])) ?>">
  <p class="error"><?php if(!empty($errors['password'])) {echo $errors['password'];} ?></p>

  <label for="password2">Confirmez votre mot de passe *</label>
  <input type="password" name="password2" id="password2" value="">

  <input type="submit" name="submitted" value="Envoyer">
</form>


<?php
include('inc/footer.php');
