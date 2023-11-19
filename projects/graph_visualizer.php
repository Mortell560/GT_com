<html>
    <head>
        <title>GT.com</title>
        <link rel="stylesheet" href="../stylesheets/general_style.css">
        <link rel="icon" href="../images/GraphTheoryLogo.ico">
        <meta charset="utf-8">
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
                    Graph Visualizer (Problème libre)
                </h1>

                <p>
                    Le but de ce projet est de créer un outil permettant de visualiser des graphes.
                </p>
                <p>
                    Il y a deux parties dans ce projet : la partie "front-end" et la partie "back-end".
                </p>
                <p>
                    La partie "front-end" est la partie qui sera visible par l'utilisateur. Elle permettra de créer des graphes, de les modifier, de les sauvegarder, de les charger, etc.
                </p>

                <p>
                    La partie "back-end" est la partie qui sera invisible par l'utilisateur. Elle permettra de stocker les graphes, de les modifier, de les charger, etc.
                </p>

                <p>
                    Le choix des langages pour le front-end et le back-end est libre. Cependant, il est conseillé d'utiliser un langage orienté objet pour le back-end. (à moins d'être fort en programmation fonctionnel ou en bash).
                </p>

                <p>Le but principal sera d'avoir la capacité de voir "en live" les parcours de graphe de différents algorithmes demandés par l'utilisateur. Une version plus ambitieuse serait de demander à l'utilisateur son propre programme et le Visualizer pourra l'exécuter</p>

                <p>Un exemple en python ci-dessous:</p>
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/7MQ19mADAV8?si=kRQMZgFjxy6O5ghT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </article>
        </section>

        <footer>
            <i><p>GT.com Copyright (c)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>

    </body>
</html>