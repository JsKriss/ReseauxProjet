<?php
session_start();
require('inc/pdo.php');
require('inc/function.php');
$title = 'Home page';
$errors = array();
$success = false;

// traitement fomulaire
if (!empty($_POST['submited'])) {
    // fail xss
    $pseudo = trim(strip_tags($_POST['pseudo']));
    $email = trim(strip_tags($_POST['email']));
    $password1 = trim(strip_tags($_POST['password1']));
    $password2 = trim(strip_tags($_POST['password2']));
    /////////////////
    // validation
    ///////////////
    // pseudo
    if (!empty($_pseudo)) {
        $errors['pseudo'] = 'Veuillez renseigner ce champ';
    } elseif (mb_strlen($pseudo) > 120) {
        $errors['pseudo'] = 'Max 120 caractères';
    } elseif (mb_strlen($pseudo) < 2) {
        $errors['pseudo'] = 'Min 2 caractères';
    } else {
        $sql = "SELECT id FROM users WHERE pseudo = :pseudo";
        $query = $pdo->prepare($sql);
        $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $query->execute();
        $verifpseudo = $query->fetch();
        if (!empty($verifpseudo)) {
            $errors['pseudo'] = 'Ce pseudo existe déjà !';
        }
    }
    //Email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $errors['email'] = 'Veuillez renseigner un email valide !';
    } else {
        $sql = "SELECT id FROM users WHERE email = :email";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $verifpseudo = $query->fetch();
        if (!empty($verifemail)) {
            $errors['email'] = 'Cet email existe  déjà !';
            // error
        }
    }
    //paswword
    if (!empty($password1)) {
        if ($password1 != $password2) {
            $errors['password'] = 'Les deux mot de passe doivent être identiques';
        } elseif (mb_strlen($password1) <= 5) {
            $errors['password'] = 'min 6  caractères';
        }
    } else {
        $errors['password'] = 'Veuillez renseigner un mot de passe';
    }
    if (count($errors) == 0) {
        // password hash
        $hashPassword = password_hash($password1, PASSWORD_BCRYPT);
        $token = generateRandomString(120);
        // insert
        $sql = "INSERT INTO users VALUES (null, :pseudo, :email, :password, :token, 'newuser', NOW(), '1')";
        $query = $pdo->prepare($sql);
        $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':password', $hashPassword, PDO::PARAM_STR);
        $query->bindValue(':token', $token, PDO::PARAM_STR);
        $query->execute();
        $success = true;
        // redirection vers la connexion
        // header('Location : login.php');
    }

} //fermeture


include('inc/header.php'); ?>



        <div id="register" class="modal">
            <h1  class="register_title">Inscription</h1>
            <form id="register" class="form register" action="register.php" method="post">

                <div class="register_container">
                    <label for="pseudo">Pseudo *</label>
                    <input class="globalForm" type="text" name="pseudo" id="pseudo" value="<?php if (!empty($_POST['pseudo'])) {
                        echo $_POST['pseudo'];
                    } ?>">
                    <p class="error"><?php if (!empty($errors['pseudo'])) {
                            echo $errors['pseudo'];
                        } ?></p>

                    <label for="email">Email *</label>
                    <input class="globalForm" type="email" name="email" id="email" value="<?php if (!empty($_POST['email'])) {
                        echo $_POST['email'];
                    } ?>">
                    <p class="error"><?php if (!empty($errors['email'])) {
                            echo $errors['email'];
                        } ?></p>

                    <label for="password1">Mot de passe *</label>
                    <input class="globalForm" type="password" name="password1" id="password1" value="">
                    <p class="error"><?php if (!empty($errors['password'])) {
                            echo $errors['password'];
                        } ?></p>

                    <label for="password2">Confirmez votre mot de passe *</label>
                    <input class="globalForm" type="password" name="password2" id="password2" value="">

                    <input class="globalForm" type="checkbox" required name="terms" id="subscribeCGU"> <!--required car problèmes avec safari-->
                    <label for="subscribeCGU">J'accepte les Conditions Générales d'Utilisation</label>
                    <br>
                    <br>
                    <input id="submit" type="submit" name="submited" value="Inscrivez-vous">

                    <div><img class="img_register_modal" src="assets/img/logo.png"></div>
                </div>
            </form>
        </div>



<?php
include('inc/footer.php');
