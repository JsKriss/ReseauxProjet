<?php
require('inc/pdo.php');
require('inc/function.php');

$title = 'Modifier votre mot de passe';
$errors = array();
$success = false;

// traitement formulaire
if (!empty($_GET['token']) && !empty($_GET['email'])) {
    $token = trim(strip_tags($_GET['token']));
    $email = trim(strip_tags($_GET['email']));
    $email = urldecode($email);
    $sql = "SELECT * FROM users WHERE email = :email AND token = :token";
    $query = $pdo->prepare($sql);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':token', $token, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();
    if(!empty($user)) {
        // gestion du formulaire ici dans cette condition +++
        if(!empty($_POST['submitted'])) {
            $password1 = trim(strip_tags($_POST['password1']));
            $password2 = trim(strip_tags($_POST['password2']));
            // password
            if(!empty($password1)) {
                if($password1 != $password2) {
                    $errors['password'] = 'Les deux mot de passe doivent être identiques';
                } elseif(mb_strlen($password1) <= 5) {
                    $errors['password'] = 'Min 6 caractères';
                }
            } else {
                $errors['password'] = 'Veuillez renseigner un mot de passe';
            }
            if(count($errors) == 0) {
                // UPDATE
                $hashPassword = password_hash($password1,PASSWORD_BCRYPT);
                $token = generateRandomString(120);
                $sql = "UPDATE users SET password = :password, token = :token WHERE email = :email";
                $query = $pdo->prepare($sql);
                $query->bindValue(':email',   $email,PDO::PARAM_STR);
                $query->bindValue(':password',$hashPassword,PDO::PARAM_STR);
                $query->bindValue(':token',   $token,PDO::PARAM_STR);
                $query->execute();
                // redirection vers login.php
                header('Location: login.php');
            }
        }
    } else {
        die('404');
    }
} else {
    die('404');
}

include('inc/header.php'); ?>

    <div id="sub-modal" class="changeMDP">
        <h1>Modifiez votre mot de passe</h1>

        <form id="formulaires" class="form modif" action="" method="post">
            <label for="password1">Nouveau mot de passe *</label>
            <input class="globalForm" type="password" name="password1" id="password1" value="">
            <p class="error"><?php if (!empty($errors['password'])) {
                    echo $errors['password'];
                } ?></p>

            <label for="password2">Confirmez votre mot de passe *</label>
            <input class="globalForm" type="password" name="password2" id="password2" value="">

            <input id="submit" type="submit" name="submitted" value="Envoyer">
        </form>
    </div>


<?php
include('inc/footer.php');
