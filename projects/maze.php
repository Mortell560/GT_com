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
                <h1>Génération de Labyrinthe & Solver</h1>
                <p>Le but de ce projet est de générer un labyrinthe aléatoire et de le résoudre. Vous pouvez choisir le langage de programmation de votre choix ainsi que les libraries graphiques associées. Il est cependant conseillé, pour plus de simplicité, d'utiliser Python 3 avec la librarie Pygame</p>
                <p>Le labyrinthe est généré à l'aide d'un <a href="https://fr.wikipedia.org/wiki/Algorithme_de_parcours_en_profondeur">parcours par profondeur</a> aléatoire de notre graphe:</p>
                <div class="img_source">
                        <img src="../images/Graph_based_maze_animation.gif" alt="Rooted tree">
                        <p>Source: <a href="https://en.wikipedia.org/wiki/Maze_generation_algorithm">Maze generation algorithm</a></p>
                </div>
                <p>Pour résoudre le labyrinthe créé, vous pourrez utiliser n'importe quel algorithme de parcours de graphe et l'implémenter dans votre langage préféré. En voici quelques exemples:</p>
                <ul>
                    <li><a href="https://en.wikipedia.org/wiki/Breadth-first_search">Parcours en largueur</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Dijkstra%27s_algorithm">L'algorithme de Dijkstra (le plus efficace la plupart du temps)</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/A*_search_algorithm">L'algorithme A* (le plus efficace dans certains cas)</a></li>
                </ul>

                
                <p>Vidéo complémentaire sur le sujet:</p>
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/zRuVhq0Kgnw?si=-4tPQbaDz-W-Oawq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </article>
        </section>

        <footer>
            <i><p>GT.com Copyright (c)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>

    </body>
</html>