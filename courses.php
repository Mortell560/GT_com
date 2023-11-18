<html>
    <head>
        <title>GT.com</title>
        <link rel="stylesheet" href="stylesheets/general_style.css">
        <link rel="icon" href="images/GraphTheoryLogo.ico">
        <link rel="stylesheet" href="stylesheets/courseList_style.css">
        <meta charset="UTF-8">
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
                    <button class="dropbtn">Exercises
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="exercises.php">Liste des exercises</a>
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
                    <li><a href="courses/course1.php">Histoire de la Théorie des Graphes</a></li>
                    <li><a href="courses/course2.php">Les Graphes: Définitions et notions formelles</a></li>
                    <li><a href="courses/course3.php">Les Graphes: Théorèmes et propriétés utiles</a></li>
                    <li><a href="courses/course4.php">Quelques structures de données utiles et implémentations</a></li>
                </ol>
            </article>
        </section>

        <footer>
            <i><p>GT.com Copyright (x)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>
    </body>
</html>