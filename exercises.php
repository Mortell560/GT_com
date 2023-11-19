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
                    <a href="exercises.php">Liste des Exercices</a>
                    <a href="exercises/ex1.php">Ex facile</a>
                    <a href="exercises/ex2.php">Ex Moyen</a>
                    <a href="exercises/ex3.php">Ex "Hard"</a>
                    </div>
                </div>
                <a href="projects.php">Projets</a>
                <a href="about.php">About</a>
            </div>
        </header>

        <section>
            <article>
                <h1 id="Title">
                    Choisissez un niveau d'exercice
                </h1>

                <ol class="selection">
                    <li style="background-color: green"><a href="exercises/ex1.php">Exercice (Niveau facile)</a></li>
                    <li style="background-color: #DA9300"><a href="exercises/ex2.php">Exercice (Niveau moyen)</a></li>
                    <li style="background-color: crimson"><a href="exercises/ex3.php">Exercice (Niveau "difficile")</a></li>
                </ol>
            </article>

        </section>

        <footer>
            <i><p>GT.com Copyright (c)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>
    </body>
</html>