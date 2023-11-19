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
                    Voronoi
                </h1>

                <p>
                    Le but de ce projet est de générer un diagramme de Voronoi à partir d'un ensemble de points aléatoires. Vous pouvez choisir le langage de programmation de votre choix ainsi que les libraries graphiques associées. Il est cependant conseillé, pour plus de simplicité, d'utiliser Python 3 avec la librarie Pygame
                </p>
                <p>En mathématiques, un diagramme de Voronoï est un pavage (découpage) du plan en cellules (régions adjacentes) à partir d'un ensemble discret de points appelés « germes ». Chaque cellule enferme un seul germe, et forme l'ensemble des points du plan plus proches de ce germe que d'aucun autre. La cellule représente en quelque sorte la « zone d'influence » du germe.<br>Le diagramme doit son nom au mathématicien russe Gueorgui Voronoï (1868-1908). Le découpage est aussi appelé décomposition de Voronoï, partition de Voronoï ou tessellation de Dirichlet.<br>De manière plus générale, il représente une décomposition d’un espace métrique en cellules (régions adjacentes), déterminée par les distances à un ensemble discret d’objets de l’espace, en général un ensemble discret de points. Dans le plan les cellules sont appelées polygones de Voronoï ou polygones de Thiessen, et dans l'espace polyèdres de Voronoï.</p>
                <img src="../images/Coloured_Voronoi_2D.png" alt="Voronoi 2D">
                <p style="text-align:center">Exemple de génération d'un diagramme de Voronoi 2D</p>
                <p>Pour créer un diagramme de Voronoi, il faut définir un nombre de points aléatoires. Puis, dans un second temps, il suffit de faire un parcours en largeur à partir de vos points générés jusqu'au moment où la distance entre le centre de la "zone" actuelle et un point de l'espace est trop grande pour appartenir à la "zone" actuelle</p>
                <p>Pour plus de détails mathématiques, veuillez vous référer à la page wikipedia: <a href="https://fr.wikipedia.org/wiki/Diagramme_de_Vorono%C3%AF">Diagramme de Voronoi</a></p>
                <p>Il sera d'ailleurs intéressant de calculer différent diagramme de Voronoi pour des dimensions plus ou moins grandes (voire décimales...) et changer la notion même de <a href="https://fr.wikipedia.org/wiki/Distance_(math%C3%A9matiques)#Exemples_de_distances_classiques">distance</a></p>

                <p><i>Remarque: Cette définition est extensible à un espace 3D</i></p>
            </article>
        </section>

        <footer>
            <i><p>GT.com Copyright (c)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>

    </body>
</html>