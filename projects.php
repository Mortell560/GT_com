<html>
    <head>
        <title>GT.com</title>
        <link rel="stylesheet" href="stylesheets/general_style.css">
        <link rel="stylesheet" href="stylesheets/courseList_style.css">
        <link rel="icon" href="images/GraphTheoryLogo.ico">
        <meta charset="utf-8">
    </head>

    <body>
        <header>
            <div class="logo">
                <img src="images/LogoCropped.png" alt="Logo">
            </div>
            <div class="navbar"> <!-- On utilisera div pour eviter le point generer par <ul> -->
                <a href="index.php">Home</a>
                <a href="courses.php">Cours</a>
                <div class="dropdown">
                    <button class="dropbtn">Exercices
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="Exercices.php">Liste des Exercices</a>
                    <a href="#">Ex1</a>
                    <a href="#">Ex2</a>
                    </div>
                </div>
                <a href="projects.php">Projets</a>
                <a href="about.php">About</a>
            </div>
        </header>

        <section>
            <article>
                <h1 id="Title">Choisissez votre cours</h1>
                <ol class="selection">
                    <li><a href="projects/maze.php">Maze (Difficulty: Easy)</a></li>
                    <li><a href="projects/voronoi.php">Voronoi (Difficulty: Medium)</a></li>
                    <li><a href="projects/graph_visualizer.php">Graph visualizer (Difficulty: Medium/Hard)</a></li>
                </ol>
            </article>
        </section>

        <footer>
            <i><p>GT.com Copyright (c)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>
    </body>
</html>