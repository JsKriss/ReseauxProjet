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
        <h3>NetScan</h3>
    </div>
    <div class="blocs">
        <div class="bloc1">
            <div>
                <p class="text1"> <img class="icon_about" src="assets/img/target.png"></p>
                <p class="text1"> NetScan est accessible a toutes et à tous. Inscription facile et rapide </p>
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
                    <li>Annalyse de capture tram réseau</li>
                    <li>Sortir des statistics sur la tram</li>
                    <li>hfbvfvbf</li>
                </ul></div>
            </div>
        </div>
    </div>
</div>
</section>
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
                        <a href="#ex4" rel="modal:open">   <img class="portrait" src="assets/img/IMG_1047.jpeg" alt=""> </a>
                    </div>
                </div>
            </div>
    </div>

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
        <img class="portrait" src="assets/img/IMG_1047.jpeg" alt="">
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




<?php include('inc/footer.php') ?>
