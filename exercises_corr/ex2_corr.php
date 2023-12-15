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
                <li><a href="ex1.php#BFS_DFS">Parcours en largueur et en longueur</a></li>
                <li><a href="ex1.php#Ex1">Exercice</a></li>
            </ul>
            <a href="../exercises/ex2.php">Exercice (Moyen)</a>
            <ul>
                <li><a href="#Pedigre">Un problème beaucoup trop commun</a></li>
                <li><a href="#Ex2">Exercice</a></li>
            </ul>
            <a href="../exercises/ex3.php">Exercice (Difficile)</a>
            <ul>
                <li><a href="../exercises/ex3.php#Dijkstra">Algorithme de Dijkstra</a></li>
                <li><a href="../exercises/ex3.php#Ex3">Exercice</a></li>
            </ul>
        </nav>

        <section>
            <article>
                <h2 id="Pedigre">
                    1) Un problème beaucoup trop commun
                </h2>

                <p>
                    Votre chat (π°), aussi nommé Pédigré, a pour passe temps favoris de marcher sur votre clavier.
                </p>
                <p>
                    Votre clavier en particulier est une grille de n × m touches, chaque touche peut être représentée par une des 4 lettres suivantes : Q, R, S ou T
                </p>
                <p>Pédigré commence toujours par marcher sur une des touches de la premiere colonne du clavier, en fonction de la touche sur laquelle Pédigré marche, il effectuera un des mouvements possibles :</p>
                <ul>
                    <li>Q - Pédigré peut avancer de 1 en bas à droite</li>
                    <li>R - Pédigré peut choisir entre trois mouvements : Avancer deux vers la droite, Avancer en bas à droite de 1 ou en haut à droite de 1</li>
                    <li>S - Pédigré doit avancer de deux vers la droite, et choisir entre monter de 1 ou descendre de 1</li>
                    <li>T - Pédigré peut monter de 1, descendre de 1, ou avancer de 1 vers la droite</li>
                </ul>
                <img src="../images/pedigre.png" alt="moves">

                <p>Votre but, est de calculer le nombre de chemins que peut prendre Pédigré, pour passer de la premiere colonne du clavier a la dernière colonne.</p>
                <p>De plus, on pose que m × n ne dépasse pas 10^6</p>

                <h2 id="Ex2">
                    2) Exercice
                </h2>
                <p>Donnez le nombre de chemins que peut prendre Pédigré pour ce clavier:</p>
                <img src="../images/Ex2.svg" alt="Ex2"><br>

                <fieldset>
                    <?php
                        if (isset($_POST['answer']))
                        {
                            $answer = $_POST['answer'];
                            if ($answer == 44)
                            {
                                echo "<p style='color: green'>Bonne réponse</p>";
                            }
                            else
                            {
                                echo "<p style='color: red'>Mauvaise réponse</p>";
                            }
                        }
                    ?>
                </fieldset>

                <p style="font-size: 10px">Merci Tristan pour le problème</p>
            </article>
        </section>
        
        <footer>
            <i><p>GT.com Copyright (c)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>
    </body>
</html>