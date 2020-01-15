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
                        <div class="presentation">
                            <h2>Pierre</h2>
                            <h3>Responsable de Projet</h3>
                            <ul class="lang">
                                <li class="material-icons">computer PHP</li>
                                <li class="material-icons">computer JQUERY</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="#ex1" rel="modal:open">
            <div class="hexagone2">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <img class="portrait" src="assets/img/personnes.jpg" alt="">
                        <div class="presentation">
                            <h2>Yann</h2>
                            <h3>Développeur</h3>
                            <ul class="lang">
                                <li class="material-icons">computer PHP</li>
                                <li class="material-icons">computer JQUERY</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="#ex1" rel="modal:open">
            <div class="hexagone2">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <img class="portrait" src="assets/img/personnes.jpg" alt="">
                        <div class="presentation">
                            <h2>Christopher</h2>
                            <h3>Développeur</h3>
                            <ul class="lang">
                                <li class="material-icons">computer HTML/CSS</li>
                                <li class="material-icons">computer JQUERY</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="#ex1" rel="modal:open">
            <div class="hexagone2">
                <div class="hexagonemain">
                    <div class="hexagonemainbefore">
                        <img class="portrait" src="assets/img/personnes.jpg" alt="">
                        <div class="presentation">
                            <h2>Antonin</h2>
                            <h3>Développeur</h3>
                            <ul class="lang">
                                <li class="material-icons">computer HTML/CSS</li>
                                <li class="material-icons">computer JQUERY</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

    <!-- Link to open the modal -->
    <p><a href="#ex1" rel="modal:open">Open Modal</a></p>
    <div id="ex1" class="modal">

        <img class="portrait" src="assets/img/personnes.jpg" alt="">
        <div class="presentation">
            <h2>Yann</h2>
            <h3>Développeur</h3>
            <ul class="lang">
                <li class="material-icons">computer PHP</li>
                <li class="material-icons">computer JQUERY</li>
            </ul>
        </div>


    </div>


<?php include('inc/footer.php') ?>
