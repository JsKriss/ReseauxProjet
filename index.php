<?php
session_start();
include ('inc/pdo.php');
include('inc/function.php');
include('inc/header.php');


?>
<div class="bloc">
    <div class="wrap">
            <div class="hexagone">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <a href="#ex1" rel="modal:open">      <img src="assets/img/personnes.jpg" alt="">  </a>
                    </div>
                </div>
            </div>
            <div class="hexagone2">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <a href="#ex2" rel="modal:open">   <img class="portrait" src="assets/img/personnes.jpg" alt=""> </a>
                    </div>
                </div>
            </div>
            <div class="hexagone2">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <a href="#ex3" rel="modal:open">  <img class="portrait" src="assets/img/personnes.jpg" alt=""> </a>
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
        <img class="portrait" src="assets/img/personnes.jpg" alt="">
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
        <img class="portrait" src="assets/img/personnes.jpg" alt="">
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
        <img class="portrait" src="assets/img/personnes.jpg" alt="">
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

    <div class="about">
        <div class="bloc1">
            <div class="target"> <img class="trapG" src="assets/img/fond-menu.jpg"> </div>-->
            <p> lorem </p>
        </div>
        <div class="bloc1">
            <div class="work"> <img class="trapC" src="assets/img/fond-menu.jpg"> </div>
            <p> lorem </p>
        </div>
        <div class="bloc1">
            <div class="entreprise"> <img class="trapD" src="assets/img/fond-menu.jpg"> </div>
            <p> lorem </p>
        </div>
    </div>

</div>




<?php include('inc/footer.php') ?>
