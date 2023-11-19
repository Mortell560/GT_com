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

        <nav class="sidenav">
            <a href="../exercises/ex1.php">Exercice (Facile)</a>
            <ul>
                <li><a href="../exercises/ex1.php#BFS_DFS">Parcours en largueur et en longueur</a></li>
                <li><a href="../exercises/ex1.php#Ex1">Exercice</a></li>
            </ul>
            <a href="../exercises/ex2.php">Exercice (Moyen)</a>
            <ul>
                <li><a href="../exercises/ex2.php#Pedigre">Un problème beaucoup trop commun</a></li>
                <li><a href="../exercises/ex2.php#Ex2">Exercice</a></li>
            </ul>
            <a href="../exercises/ex3.php">Exercice (Difficile)</a>
            <ul>
                <li><a href="#Dijkstra">Algorithme de Dijkstra</a></li>
                <li><a href="#Ex3">Exercice</a></li>
            </ul>
        </nav>

        <section>
            <article>
                <h2 id="Dijkstra">
                    1) Algorithme de Dijkstra
                </h2>
                <p>En théorie des graphes, l'algorithme de Dijkstra (prononcé [dɛɪkstra]) sert à résoudre le problème du plus court chemin. Il permet, par exemple, de déterminer un plus court chemin pour se rendre d'une ville à une autre connaissant le réseau routier d'une région. Plus précisément, il calcule des plus courts chemins à partir d'une source vers tous les autres sommets dans un graphe orienté pondéré par des réels positifs. On peut aussi l'utiliser pour calculer un plus court chemin entre un sommet de départ et un sommet d'arrivée.</p>
                <div class="img_source">
                    <img src="../images/Dijkstra_Animation.gif" alt="Dijkstra">
                    <p>Source: <a href="https://fr.wikipedia.org/wiki/Algorithme_de_Dijkstra">Algorithme de Dijkstra (Wikipedia)</a></p>
                </div>
                <p>
                    Ci-dessous une video explicative de l'algorithme de Dijkstra:
                </p>
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/bZkzH5x0SKU?si=jW0CSQJvmH0I3-Dd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                <h2 id="Ex3">
                    2) Exercice
                </h2>
                <p>
                    On considère le graphe suivant:
                </p>
                <img src="../images/Ex3.png" alt="GraphEx3">
                <p>Donner le chemin le plus court dans ce dernier entre les sommets 1 et 8 ainsi que le coût du chemin selon l'algorithme de Dijkstra.</p>

                <fieldset>
                    <?php
                        $corr = 0;
                        if(isset($_POST['answer'])){
                            $u_ans = $_POST['answer'];
                            $u_ans = str_replace(" ", "", $u_ans);
                            $ans = "1,6,2,4,3,12,10,11,8";
                            if ($u_ans == $ans){
                                $corr++;
                            }
                            else{
                                echo "<p>La réponse est incorrecte</p>";
                            }
                        }
                        if(isset($_POST['cost'])){
                            $u_cost = $_POST['cost'];
                            $cost = 30;
                            if ($u_cost == $cost){
                                $corr++;
                            }
                            else{
                                echo "<p>Le coût est incorrect</p>";
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