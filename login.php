<?php
session_start();
require('inc/pdo.php');
require('inc/function.php');
$title = 'Connexion';
$errors = array();
$success = false;

if (!empty($_POST['submited'])) {
    // fail xss
    $login = trim(strip_tags($_POST['login']));
    $password = trim(strip_tags($_POST['password']));

    if (empty($login) || empty($password)) {
        $errors['login'] = 'Veuillez renseigner ces champs';
    } else {
        $sql = "SELECT * FROM users WHERE pseudo = :login OR email = :login";
        $query = $pdo->prepare($sql);
        $query->bindValue(':login', $login, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();
        // debug($user);

        if (!empty($user)) {
            if($user['actif'] == '0') {
                $errors['login'] = 'Votre compte a été désactivé veuillez contacter l\'administrateur.';
            } elseif($user['role'] == 'newuser') {
                $errors['login'] = 'Votre compte n\'a encore été approuvé, veuillez réessayer plus tard.';
            } elseif (password_verify($password, $user['password'])) {
                $_SESSION['login'] = array(
                    'id' => $user['id'],
                    'pseudo' => $user['pseudo'],
                    'role' => $user['role'],
                    'ip' => $_SERVER['REMOTE_ADDR'],
                );

                //debug($_SESSION);
                //die('test');
                header('Location: index.php');
            } else {
                $errors['login'] = 'Identifiants incorrects';
            }
        } else {
            $errors['login'] = 'Identifiants incorrects';
        }
    }
}

include('inc/header.php'); ?>

    <div class="modal_form connexion" id="connexion">

        <h1  class="register_title">Connexion</h1>
        <form id="connexion" class="form login" action="login.php" method="post">
            <label for="login">Pseudo ou email *</label>
            <input class="globalForm" type="text" name="login" id="login" value="<?php if (!empty($_POST['login'])) {
                echo $_POST['login'];
            } ?>">
            <p class="error"><?php if (!empty($errors['login'])) {
                    echo $errors['login'];
                } ?></p>

            <label for="password">Mot de passe *</label>
            <input class="globalForm" type="password" name="password" id="password" value="">

            <p class="forget register"><a href="register.php">Pas de compte NetScan ? Créez-le maintenant !</a></p>
            <br>
            <p class="forget mdp"><a href="forget_password.php">Mot de passe oublié</a></p>
            <div class="divLogoLogin"><img class="img_login_modal" src="assets/img/logo.png"></div>
            <br>
            <input id="submit" class="submitlogin" type="submit" name="submited" value="Connexion">
        </form>

    </div>


<?php
include('inc/footer.php');
