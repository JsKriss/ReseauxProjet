<?php
include ('inc/pdo.php');
include('inc/function.php');
include('inc/header.php');

session_start();
?>
<div class="bloc">
    <div class="wrap">
        <a href="#ex1" rel="modal:open">
            <div class="hexagone">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <img src="assets/img/personnes.jpg" alt="">
                    </div>
                </div>
            </div>
        </a>
        <a href="#ex2" rel="modal:open">
            <div class="hexagone2">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <img class="portrait" src="assets/img/personnes.jpg" alt="">
                    </div>
                </div>
            </div>
        </a>
        <a href="#ex3" rel="modal:open">
            <div class="hexagone2">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <img class="portrait" src="assets/img/personnes.jpg" alt="">
                    </div>
                </div>
            </div>
        </a>
        <a href="#ex4" rel="modal:open">
            <div class="hexagone2">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <img class="portrait" src="assets/img/personnes.jpg" alt="">
                    </div>
                </div>
            </div>
        </a>
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
        <img class="portrait" src="assets/img/personnes.jpg" alt="">
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




<?php include('inc/footer.php') ?>
