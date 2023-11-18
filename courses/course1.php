<html>
    <head>
        <title>GT.com</title>
        <link rel="stylesheet" href="../stylesheets/general_style.css">
        <link rel="icon" href="../images/GraphTheoryLogo.ico">
        <link rel="stylesheet" href="../stylesheets/course_style.css">
        <meta charset="UTF-8">
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
                    <button class="dropbtn">Exercises
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="../exercises.php">Liste des exercises</a>
                    <a href="#">Ex1</a>
                    <a href="#">Ex2</a>
                    </div>
                </div>
                <a href="../projects.php">Projets</a>
                <a href="../about.php">About</a>
            </div>
        </header>
        
        <section>
            <article>
                <h1>
                    L'histoire de la Théorie des Graphes
                </h1>

                <h2>
                    Le problème des sept ponts de Königsberg
                </h2>

                <p>Un article du mathématicien suisse Leonhard Euler, présenté à l'Académie de Saint-Pétersbourg en 1735 puis publié en 1741, traitait du problème des sept ponts de Königsberg.<br>Son énoncé est le suivant:</p>
                <blockquote cite="https://archive.wikiwix.com/cache/index2.php?url=http%3A%2F%2Feulerarchive.maa.org%2Fdocs%2Foriginals%2FE053.pdf%2Findex.html#federation=archive.wikiwix.com&tab=url">
                La ville de Königsberg (aujourd'hui Kaliningrad) est construite autour de deux îles situées sur le Pregel et reliées entre elles par un pont. Six autres ponts relient les rives de la rivière à l'une ou l'autre des deux îles, comme représentés sur le plan ci-dessus. Le problème consiste à déterminer s'il existe ou non une promenade dans les rues de Königsberg permettant, à partir d'un point de départ au choix, de passer une et une seule fois par chaque pont, et de revenir à son point de départ, étant entendu qu'on ne peut traverser le Pregel qu'en passant sur les ponts.<br>Le problème mathématique se présente de la façon suivante :
                </blockquote>
                <div class="img_source">
                    <img width="400px" height="200px" src="../images/Wikipedia_sept_ponts.png" alt="sept ponts graph">
                    <p>Source: <a href="https://fr.wikipedia.org/wiki/Probl%C3%A8me_des_sept_ponts_de_K%C3%B6nigsberg">Problème des sept ponts de Königsberg (Wikipedia)</a></p>
                </div>

                <p>En essayant à la main, vous pourrez en conclure intuitivement qu'il n'existe aucun chemin pour lequel on ne repasse sur aucun ponts</p>
                <p>En effet, si on part d'un point de départ, on doit forcément passer par un pont pour aller sur une île, puis repasser par un pont pour aller sur l'autre île, puis repasser par un pont pour revenir sur la première île, puis repasser par un pont pour revenir sur la rive, et enfin repasser par un pont pour revenir au point de départ.<br>On a donc passé 5 fois sur des ponts, et on n'a pas encore passé sur le dernier pont, donc on ne peut pas revenir au point de départ en passant une et une seule fois par chaque pont.</p>
                <p>Euler donne la solution en utilisant le concept de graphes <em>"Eulériens"</em> (cf prochains cours) et à l'aide d'un théorème sur ces derniers, la solution devient évidente.<br>Le théorème en question postule que s'il existe un nombre d'entrée et sortie d'un noeud (île) est égal à un nombre <b>impair</b>, alors il n'y a pas de circuit où l'on passe une seule fois sur chaque arête (pont). </p>
            
                <h2>
                    Et aujourd'hui ?
                </h2>

                <p>Les graphes peuvent être extrêmement versatiles et leur utilisation peut aller du problème d'optimisation de réseau à l'optimisation d'emplois du temps en utilisant le <a href="https://fr.wikipedia.org/wiki/Th%C3%A9or%C3%A8me_des_quatre_couleurs">Théorème des quatre couleurs</a></p>
                <div class="img_source">
                    <img src="../images/PipeNet.jpg" alt="PipeNet">
                    <p>Source: <a href="https://fr.wikipedia.org/wiki/Th%C3%A9orie_des_graphes#/media/Fichier:PipeNet.jpg">https://fr.wikipedia.org/wiki/Th%C3%A9orie_des_graphes#/media/Fichier:PipeNet.jpg</a></p>
                </div>
            </article>
            <div id="NextSection">
                <a href="../courses.php"><button>Liste des cours</button></a>
                <a href="course2.php"><button>Graphes: Définitions et Notions</button></a>
            </div>
        </section>

        <footer>
            <i><p>GT.com Copyright (c)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>
    </body>
</html>