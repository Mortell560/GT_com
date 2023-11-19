<html>
    <head>
        <meta charset="utf-8">
        <title>GT.com</title>
        <link rel="icon" href="../images/GraphTheoryLogo.ico">
        <link rel="stylesheet" href="../stylesheets/general_style.css">
        <link rel="stylesheet" href="../stylesheets/course_style.css">
    </head>

    <body>
        <header>
            <div class="logo">
                <img src="../images/LogoCropped.png" alt="Logo">
            </div>
            <div class="navbar"> <!-- On utilisera div pour eviter le point generer par <ul> -->
                <a href="../index.php">Home</a>
                <a href="../courses.php">Cours</a>
                <div class="dropdown">
                    <button class="dropbtn">Exercices
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="../exercises.php">Liste des Exercices</a>
                    <a href="../exercises/ex1.php">Ex facile</a>
                    <a href="../exercises/ex2.php">Ex Moyen</a>
                    <a href="../exercises/ex3.php">Ex "Hard"</a>
                    </div>
                </div>
                <a href="../projects.php">Projets</a>
                <a href="../about.php">About</a>
            </div>
        </header>


        <section>
            <article>
                <h1>
                    Théorèmes et propriétés utiles
                </h1>

                <h2>
                    Théorème d'Euler (Cas Non-Orienté)
                </h2>
                <p>Le théorème d'Euler, appelé aussi théorème d'Euler-Hierholzer, se décline en deux caractérisations:</p>
                <ul>
                    <li>Un graphe connexe admet un parcours eulérien si et seulement si ses sommets sont tous de degré pair sauf au plus deux.</li>
                    <li>Un graphe connexe admet un cycle eulérien si et seulement si tous ses sommets sont de degré pair.</li>
                </ul>

                <h2>
                    Théorème d'Euler (Cas Orienté)
                </h2>

                <p>Soit G un graphe orienté. Les trois propositions suivantes sont équivalentes:</p>
                <ul>
                    <li>G est eulérien</li>
                    <li>G est fortement connexe et chaque sommet a le même nombre d'arêtes entrantes que sortantes</li>
                    <li>G est connexe et chacun de ses sommets est l'extrémité initiale de terminale du même nombre d'arêtes</li>
                </ul>
                <p><i>Remarque: La connexité suffit pour étendre le cas non orienté au cas orienté, et un graphe eulérien est nécessairement fortement connexe</i></p>

                <h2>
                    Théorème des quatre couleurs
                </h2>

                <p>Le théorème des quatre couleurs indique qu'il est possible, en n'utilisant que quatre couleurs différentes, de colorier n'importe quelle carte découpée en régions connexes, de sorte que deux régions adjacentes (ou limitrophes), c'est-à-dire ayant toute une frontière (et non simplement un point) en commun reçoivent toujours deux couleurs distinctes. L'énoncé peut varier et concerner, de manière tout à fait équivalente, la coloration des faces d'un polyèdre ou celle des sommets d'un graphe planaire, en remplaçant la carte par un graphe dont les sommets sont les régions et les arêtes sont les frontières entre régions:</p>
                <div class="img_source">
                    <img src="../images/4_couleurs_Benelux.png" alt="ColorMapBenelux">
                    <p>Source: <a href="https://fr.wikipedia.org/wiki/Th%C3%A9or%C3%A8me_des_quatre_couleurs">Coloriage en quatre couleurs de cinq pays d'Europe (autour du Luxembourg) avec leur structure de graphe.</a></p>
                </div>
                <p>Il s'agit d'un théorème les plus controversés de la communauté mathématique puisqu'il a été prouvé en décomposant le problème en un nombre fini de problème qu'un ordinateur a pu vérifié</p>

                <h2>
                    Formule d'Euler
                </h2>
                <p>La formule d'Euler pour un graphe planaire connexe est:</p>
                <p style="text-align:center;">n - a + f = 2</p>
                <p>Avec n le nombre de noeud, a le nombre d'arêtes et f le nombre de faces</p>
            </article>
            <div id="NextSection">
                <a href="course2.php"><button>Graphes: Définitions et Notions</button></a>
                <a href="course4.php"><button>Quelques structures de données utiles et implémentations</button></a>
            </div>
        </section>


        <footer>
            <i><p>GT.com Copyright (c)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>
    </body>
</html>