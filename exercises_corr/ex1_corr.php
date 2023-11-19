<html>
    <head>
        <title>GT.com</title>
        <link rel="stylesheet" href="../stylesheets/general_style.css">
        <link rel="stylesheet" href="../stylesheets/exercice_style.css">
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
            <nav class="sidenav">
                <a href="../exercises/ex1.php">Exercice (Facile)</a>
                <ul>
                    <li><a href="#BFS_DFS">Parcours en largueur et en longueur</a></li>
                    <li><a href="#Ex1">Exercice</a></li>
                </ul>
                <a href="../exercises/ex2.php">Exercice (Moyen)</a>
                <ul>
                    <li><a href=""></a></li>
                </ul>
                <a href="../exercises/ex3.php">Exercice (Difficile)</a>
                <ul>
                    <li><a href=""></a></li>
                </ul>
            </nav>
            <article>
                <h1>Commençons avec les bases:</h1>
                <h2 id="BFS_DFS">
                    1) Parcours en largeur et en longueur (BFS et DFS en anglais)
                </h2>

                <p>
                    Pour réaliser un parcours en largeur, il faut utiliser une file (FIFO) et pour un parcours en profondeur, il faut utiliser une pile (LIFO).<br/>
                    <ul>
                        <li>Parcours en largeur: on commence par explorer un nœud source, puis ses successeurs, puis les successeurs non explorés des successeurs, etc.</li>
                        <div class="img_source">
                            <img src="../images/Breadth-First-Search-Algorithm.gif" alt="DFS">
                            <p>Source: <a href="https://commons.wikimedia.org/wiki/File:Breadth-First-Search-Algorithm.gif"> BFS (Wikipedia)</a></p>
                        </div>
                        <li>Parcours en profondeur: Il poursuit alors un chemin dans le graphe jusqu'à un cul-de-sac ou alors jusqu'à atteindre un sommet déjà visité. Il revient alors sur le dernier sommet où on pouvait suivre un autre chemin puis explore un autre chemin</li>
                        <div class="img_source">
                            <img src="../images/Depth-First-Search.gif" alt="DFS">
                            <p>Source: <a href="https://en.m.wikipedia.org/wiki/File:Depth-First-Search.gif"> DFS (Wikipedia)</a></p>
                        </div>
                    </ul>
                </p>

                <h2 id="Ex1">
                    2) Exercice
                </h2>
                <p>Donnez le parcours en largeur et en profondeur du graphe ci-dessous (On commencera par le sommet "1") en utilisant un programme fait dans le langage de votre choix.</p>
                <img src="../images/GraphEx1.png" alt="GraphEX1">
                <br>
                <fieldset>
                    <?php
                        $corr = 0;
                        if(isset($_POST['BFS']))
                        {
                            $BFS = $_POST['BFS'];
                            $BFS = str_replace(' ','',$BFS);
                            $BFS_corr = "1,2,6,3,4,5,7";
                            if ($BFS === $BFS_corr)
                            {
                                $corr++;
                            }
                            else{
                                echo "<p>Le parcours en largeur est faux</p>";
                            }
                        }
                        if (isset($_POST['DFS']))
                        {
                            $DFS = $_POST['DFS'];
                            $DFS = str_replace(' ','',$DFS);
                            $DFS_corr = "1,2,3,4,6,5,7";
                            if ($DFS === $DFS_corr)
                            {
                                $corr++;
                            }
                            else{
                                echo "<p>Le parcours en profondeur est faux</p>";
                            }
                        }
                        if ($corr == 2)
                        {
                            echo "<legend style=\"color: green;\">Bravo, vous avez réussi l'exercice</legend>";
                        }
                        else{
                            echo "<legend style=\"color: red;\">Vous avez fait $corr/2</legend>";
                        }
                    ?>
                </fieldset>
            </article>
        </section>
        
        <footer>
            <i><p>GT.com Copyright (c)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>
    </body>
</html>