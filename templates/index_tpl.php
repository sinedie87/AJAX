<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">

<!-- Required Core Stylesheet -->
<link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">

    <title>Portfolio</title>
</head>
<body>
    <div id="contenu">
        <section id="menu">
        <a href="#description"><h1>Ludovic BETHENON</h1></a>
            <nav>
                <a href="#description">Bonjour!</a>
                <a href="#competences">Compétences</a>
                <a href="#realisations">Réalisations</a>
                <a href="#curiosites">Curiosités</a>
                <!--<a href="#copains">Copains</a>-->
                <a href="#contact">Social</a>
            </nav>
        </section>

            <section id="description">
                <h2>Bonjour!</h2>

                    <img src="img/ludo.jpg" id="photoProfil" alt="Photo de Profil">

                    <p>Je souhaiterais intégrer une structure qui me permette de continuer mon apprentissage tout en ayant la possibilité de contribuer aux projets internes. Souhaitant mettre en pratique mes connaissances et les développer, je suis à la recherche d’une première expérience.</p>
                    
                    <p>Suite à une reconversion professionnelle dans le domaine du développement WEB, j’ai effectué une formation de plusieurs mois portant sur les fondamentaux du métier : HTML, CSS, JavaScript, PHP. J'ai également manipulé des bases de données via MySQL.</p>

                    <p>Désireux de renforcer mes acquis et en développer de nouveaux, j'enrichis mes connaissances par une pratique quotidienne sur des projets personnels.</p>

                    <p id="para">Je me forme actuellement sur le framework Symfony. Dans un avenir proche, j'ai également pour ambition d'apprendre de nouvelles technologies notamment NodeJS et React.</p>

                    <a id="cv" href="datas/cv.pdf" download>Télécharger mon CV</a>

                    <!-- <p>const Ludo = (beer, data) => {
                        return data > 100 ? beer = true : false
                        }</p> -->

            </section>

            <section id="competences">
                <h2>Compétences</h2>
                    <h3>Techniques</h3>
                        <div id="comp-tech">
                            <div class="gauche">
                                <ul>
                                    <img class="logo" src="img/logo/html5.svg" alt="">
                                    <img class="logo" src="img/logo/css3.svg" alt="">
                                    <img class="logo" src="img/logo/sass.svg" alt="">
                                    <img class="logo" src="img/logo/javascript.svg" alt="">
                                    <img class="logo" src="img/logo/jquery.svg" alt="">
                                    <img class="logo" src="img/logo/ajx.svg" alt="">
                                    <img class="logo" src="img/logo/php.svg" alt="">
                                    <!-- <li>HTML</li>
                                    <li>Javascript</li>
                                    <li>AJAX</li>
                                    <li>MySQL</li>
                                    <li>Symfony</li>
                                    <li>Webpack</li> -->
                                </ul>
                            </div>
                            <div class="droite">
                                <ul>
                                    <img class="logo" src="img/logo/mysql-5.svg" alt="">
                                    <img class="logo" src="img/logo/symfony.svg" alt="">
                                    <img class="logo" src="img/logo/webpack.svg" alt="">
                                    <img class="logo" src="img/logo/twig.png" alt="">
                                    <img class="logo" src="img/logo/doctrine.svg" alt="">
                                    <img class="logo" src="img/logo/git.svg" alt="">
                                    <img class="logo" src="img/logo/visual-studio-code.svg" alt="">
                                    <!-- <li>CSS</li>
                                    <li>jQuery</li>
                                    <li>PHP</li>
                                    <li>TWIG</li>
                                    <li>Doctrine</li>
                                    <li>GitHub</li> -->
                                </ul>
                            </div>
                        </div>

                    <h3>Personnalité</h3>
                        <div id="comp-perso">
                            <div class="gauche">
                                <ul>
                                    <li>Curieux</li>
                                    <li>Sociable</li>
                                    <li>Rigoureux</li>
                                    <li>Autonome</li>
                                    <li>Dynamique</li>
                                </ul>
                            </div>
                            <div class="droite">
                                <ul>
                                    <li>Loyal</li>
                                    <li>Investi</li>
                                    <li>Réactif</li>
                                    <li>Polyvalent</li>
                                    <li>Persévérant</li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
            </section>

            <section id="realisations">
                <h2>Réalisations</h2>

                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">

                        </ul>
                    </div>
                </div>
            </section>


            <section id="curiosites">
                <h2>Curiosités</h2>
                    <p>Liste longue comme le bras. Mais à choisir : </p>
                        <ul>
                            <li>(Apprendre à) Coder</li>
                            <li>Les gadgets technologiques !</li>
                            <li>Parcourir notre belle Planète</li>
                            <li>Amateur de bières (les vraies !)</li>
                            <li>Les restaurants, les hôtels, la Dolce Vita !</li>
                            <li></li>
                        </ul>
            </section>
            


            <!-- <section id="copains">
                <h2>Copains</h2>
            </section> -->

            <section id="contact">
                    <h2>Social</h2>
                        <div class="block">
                            <a href="mailto:ludovic.bethenon@gmail.com"><img src="img/logo/email.png" alt=""></a>
                            <a href="https://github.com/sinedie87"><img src="img/logo/github-1.svg" alt=""></a>
                            <a href="https://www.linkedin.com/in/ludovic-bethenon-a71316196/"><img src="img/logo/linkedin.svg" alt=""></a>
                            <a href="https://goo.gl/maps/aiZwnmYuNkhshqSm9" target="_blank"><img src="img/logo/location.svg" alt=""></a>
                        </div>
                        <p>Copyright 2019 © Par Ludovic BETHENON. Tous droits réservés.</p>
                </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/slide.js" type="module"></script>




    




</body>
</html>