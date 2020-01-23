<?php
session_start();
include ('inc/pdo.php');
include('inc/function.php');
include('inc/header.php');


?>
<section id="factory">
<div class="about">
    <div class="blocs">
        <h2 class="aboutus">About us</h2>
        <h3 class="sub_title">NetScan</h3>
    </div>
    <div class="blocs">
        <div class="bloc1">
            <div>
                <p class="text1"> <img class="icon_about" src="assets/img/target.png"></p>
                <p class="text1"> NetScan est accessible à toutes et à tous. Inscription facile et rapide </p>
            </div>
        </div>
        <div class="bloc1">
            <div>
                <p class="text2"> <img class="icon_about" src="assets/img/utilisateur.png"></p>
                <p class="text2"> NetScan est un analyseur de paquets libre et gratuit. </p>
            </div>
        </div>
        <div class="bloc1">
            <div >
                <div class="text3">
                    <p class="text3"> <img class="icon_about" src="assets/img/societe.png"></p>
                    <p>Fonctionnalité :</p>
                <ul>
                    <li class="tache">Analyse de capture tram réseau</li>
                    <li class="tache">Sortir des statistics sur la tram</li>
                </ul></div>
            </div>
        </div>
    </div>
</div>
</section>
<!--<div class="clear"></div>-->
<section id="squad">
<div class="bloc">
    <div class="wrap">
            <div class="hexagone">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <a href="#ex1" rel="modal:open">      <img src="assets/img/pierre.jpg" alt="">  </a>
                    </div>
                </div>
            </div>
            <div class="hexagone2">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <a href="#ex2" rel="modal:open">   <img class="portrait" src="assets/img/yann copie.jpg" alt=""> </a>
                    </div>
                </div>
            </div>
            <div class="hexagone2">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <a href="#ex3" rel="modal:open">  <img class="portrait" src="assets/img/kris.jpg" alt=""> </a>
                    </div>
                </div>
            </div>
            <div class="hexagone">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <a href="#ex4" rel="modal:open">   <img class="portrait" src="assets/img/antonin.jpeg" alt=""> </a>
                    </div>
                </div>
            </div>
    </div>
    <div class="clear"></div>

    <!-- Link to open the modal -->
    <div id="ex1" class="modal">
        <img class="portrait" src="assets/img/pierre.jpg" alt="">
        <div class="presentation">
            <h2 class="prenom">Pierre</h2>
            <h3 class="job">Responsable de Projet</h3>
            <ul class="lang">
                <li class="material-icons">computer PHP</li>
                <li class="material-icons">computer JQUERY</li>
            </ul>
        </div>
    </div>
    <div id="ex2" class="modal">
        <img class="portrait" src="assets/img/yann copie.jpg" alt="">
        <div class="presentation">
            <h2 class="prenom">Yann</h2>
            <h3 class="job">Développeur</h3>
            <ul class="lang">
                <li class="material-icons">computer PHP</li>
                <li class="material-icons">computer JQUERY</li>
            </ul>
        </div>
    </div>
    <div id="ex3" class="modal">
        <img class="portrait" src="assets/img/kris.jpg" alt="">
        <div class="presentation">
            <h2 class="prenom">Christopher</h2>
            <h3 class="job">Développeur</h3>
            <ul class="lang">
                <li class="material-icons">computer HTML/CSS</li>
                <li class="material-icons">computer JQUERY</li>
            </ul>
        </div>
    </div>
    <div id="ex4" class="modal">
        <img class="portrait" src="assets/img/antonin.jpeg" alt="">
        <div class="presentation">
            <h2 class="prenom">Antonin</h2>
            <h3 class="job">Développeur</h3>
            <ul class="lang">
                <li class="material-icons">computer HTML/CSS</li>
                <li class="material-icons">computer JQUERY</li>
            </ul>
        </div>
    </div>
</div>
</section>
<div class="clear"></div>

<!--SECTION CONTACT-->
<?php
// Traitement PHP
$errors = array();
$success = false;
if(!empty($_POST['submit'])) {
$nom   = clean($_POST['nom']);
$prenom = clean($_POST['prenom']);
$email   = clean($_POST['email']);
$message = clean($_POST['message']);
// Validation
$errors = textValid($errors,$nom,'nom',3,155);
$errors = textValid($errors,$prenom,'prenom',3,155);
$errors = emailValidation($errors,$email,'email');
$errors = textValid($errors,$message,'message',5,2000);
if(count($errors) == 0) {
// insert avec protection des injections SQL
$sql = "INSERT INTO contact VALUES (null,:ctc_nom,:ctc_prenom,:ctc_email,:ctc_message,NOW())";
$query = $pdo->prepare($sql);
$query->bindValue(':ctc_nom',$nom,PDO::PARAM_STR);
$query->bindValue(':ctc_prenom',$prenom,PDO::PARAM_STR);
$query->bindValue(':ctc_email',$email,PDO::PARAM_STR);
$query->bindValue(':ctc_message',$message,PDO::PARAM_STR);
$query->execute();

$success = true;
}
} ?>

<div class="wrap2">
    <section id="contact">

        <h2 class="register_title contactUS">Nous Contacter</h2>
        <div class="ligne"></div>

        <?php if ($success) { ?>
            <p class="success">Merci pour votre message.</p>
        <?php } else { ?>
            <form class="form contact" action="#" method="post">
                <div class="partI">
                    <label for="nom">Votre Nom</label>
                    <input class="input_formContact" type="text" name="nom" value="<?php if (!empty($_POST['nom'])) {
                        echo $_POST['nom'];
                    } ?>" placeholder="Ex: Doe">
                    <p class="error"><?php if (!empty($errors['nom'])) {
                            echo $errors['nom'];
                        } ?></p>
                </div>
                <div class="partI">
                    <label for="prenom">Votre Prenom</label>
                    <input class="input_formContact" type="text" name="prenom"
                           value="<?php if (!empty($_POST['prenom'])) {
                               echo $_POST['prenom'];
                           } ?>" placeholder="Ex: John">
                    <p class="error"><?php if (!empty($errors['prenom'])) {
                            echo $errors['prenom'];
                        } ?></p>
                </div>

                <div class="partII">
                    <label for="email">Votre Email</label>
                    <input class="input_formEmail" type="email" name="email" value="<?php if (!empty($_POST['email'])) {
                        echo $_POST['email'];
                    } ?>" placeholder="Ex: johndoe@gmail.com">
                    <p class="error"><?php if (!empty($errors['email'])) {
                            echo $errors['email'];
                        } ?></p>
                </div>

                <div class="partIII">
                    <label for="message">Votre Message</label>
                    <textarea class="textarea_formContact" type="text" name="message" rows="8" cols="80"
                              placeholder="Bonjour"><?php if (!empty($_POST['message'])) {
                            echo $_POST['message'];
                        } ?></textarea>
                    <p class="error"><?php if (!empty($errors['message'])) {
                            echo $errors['message'];
                        } ?></p>
                    <input class="submit_formContact" id="submit" type="submit" name="submit" value="Envoyer">
                </div>
            </form>
        <?php } ?>

    </section>
</div>
<div class="clear"></div>




<?php include('inc/footer.php') ?>
