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
                <a href="../exercises.php">Exercices</a>
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
                    <li><a href="../exercises/ex2.php#Pedigre">Un problème beaucoup trop commun</a></li>
                    <li><a href="../exercises/ex2.php#Ex2">Exercice</a></li>
                </ul>
                <a href="../exercises/ex3.php">Exercice (Difficile)</a>
                <ul>
                    <li><a href="../exercises/ex3.php#Dijkstra">Algorithme de Dijkstra</a></li>
                    <li><a href="../exercises/ex3.php#Ex3">Exercice</a></li>
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
                <fieldset id="1">
                    <?php
                        $corr = 0;
                        if(isset($_POST['BFS']))
                        {
                            $BFS = $_POST['BFS'];
                            $BFS = str_replace(' ','',$BFS);
                            preg_match("/[0-9][^A-Z].*/i", $BFS, $matches);
                            if (sizeof($matches)==1) {
                                $BFS = $matches[0];
                                $BFS_corr = "1,2,6,3,4,5,7";
                                if ($BFS === $BFS_corr)
                                {
                                    $corr++;
                                }
                                else{
                                    echo "<p>Le parcours en largeur est faux</p>";
                                }
                            }
                            else{
                                echo "<p>Le parcours en largeur est faux</p>";
                            }
                        }
                        if (isset($_POST['DFS']))
                        {
                            $DFS = $_POST['DFS'];
                            $DFS = str_replace(' ','',$DFS);
                            preg_match("/[0-9][^A-Z].*/i", $DFS, $matches);
                            if (sizeof($matches)==1){
                                $DFS = $matches[0];
                                $DFS_corr = "1,2,3,4,6,5,7";
                                if ($DFS === $DFS_corr)
                                {
                                    $corr++;
                                }
                                else{
                                    echo "<p>Le parcours en profondeur est faux</p>";
                                }
                            }
                            else{
                                echo "<p>Le parcours en profondeur est faux</p>";
                            }
                        }
                        if ($corr == 2)
                        {
                            echo "<legend id=\"S\" style=\"color: green;\">Bravo, vous avez réussi l'exercice</legend>";
                        }
                        else{
                            echo "<legend id=\"S\" style=\"color: red;\">Vous avez fait $corr/2</legend>";
                        }
                    ?>
                </fieldset>
                <?php
                    $corr = 0;
                    if(isset($_POST['BFS']))
                    {
                        $BFS = $_POST['BFS'];
                        $BFS = str_replace(' ','',$BFS);
                        preg_match("/[0-9][^A-Z].*/i", $BFS, $matches);
                        if (sizeof($matches)==1) {
                            $BFS = $matches[0];
                            $BFS_corr = "1,2,6,3,4,5,7";
                            if ($BFS === $BFS_corr)
                            {
                                $corr++;
                            }
                            
                        }
                        
                    }
                    if (isset($_POST['DFS']))
                    {
                        $DFS = $_POST['DFS'];
                        $DFS = str_replace(' ','',$DFS);
                        preg_match("/[0-9][^A-Z].*/i", $DFS, $matches);
                        if (sizeof($matches)==1){
                            $DFS = $matches[0];
                            $DFS_corr = "1,2,3,4,6,5,7";
                            if ($DFS === $DFS_corr)
                            {
                                $corr++;
                            }
                            
                        }
                    }

                    if ($corr == 2)
                        {
                            echo "<div id=\"Bonus\">
                            <h2>Exo Bonus</h2>
                            <p>Donnez le parcours en largeur et en profondeur du graphe ci-dessous (On commencera par le sommet \"1\") en utilisant un programme fait dans le langage de votre choix.</p>
                            <img src=\"../images/GraphEx1Bonus.png\" alt=\"GraphEX1Bonus\" width=\"800px\" height=\"200px\">
                            <br>
                            <fieldset id=\"2\">
                                <legend>Entrez vos réponses ci-dessous</legend>
                                <form action=\"ex1_corr_Bonus.php\" method=\"post\">
                                    <label for=\"BFS_B\">Parcours en largeur:</label>
                                    <input type=\"text\" name=\"BFS_B\" id=\"BFS_B\" placeholder=\"Ex: 1,2,3,4,5,6,7,8,9,10\" required><br>
                                    <label for=\"DFS_B\">Parcours en profondeur:</label>
                                    <input type=\"text\" name=\"DFS_B\" id=\"DFS_B\" placeholder=\"Ex: 1,2,3,4,5,6,7,8,9,10\" required><br>
                                    <input type=\"submit\" value=\"Valider\">
                                </form>
                            </fieldset>
                        </div>";
                        }
                ?>
            </article>
        </section>
        
        <footer>
            <i><p>GT.com Copyright (c)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>
    </body>
</html>