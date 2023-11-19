<html>
    <head>
        <meta charset="utf-8">
        <title>GT.com</title>
        <link rel="icon" href="../images/GraphTheoryLogo.ico">
        <link rel="stylesheet" href="../stylesheets/general_style.css">
        <link rel="stylesheet" href="../stylesheets/course_style.css">
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
                    <a href="../Exercices.php">Liste des Exercices</a>
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
                    Définitions & Notions
                </h1>

                <p>Un <b><em>graphe</em></b> est un couple G = (V,E) comprenant deux ensembles :</p>
                <ul>
                    <li>V: <b>Sommets</b></li>
                    <li>E: <b>Arêtes</b>, chacune étant associée à un couple (u,v) ou une paire {u,v} de sommets {u,v ∈ V}</li>
                </ul>
                <p>Il y a plusieurs principaux types de graphes :</p>
                <ul>
                    <li>Dans un graphe <em><b>non orienté</b></em>, les arêtes n'ont pas d'orientation et sont donc associées à une paire {u, v}. Dans un graphe orienté, les arêtes sont appelées arcs et ont une orientation de u vers v ; elles sont ainsi associées au couple (u, v). Un graphe mixte comporte à la fois des arêtes et des arcs, on le définit alors plutôt comme le triplet G = (V, E, A).</li>
                    <li>Un graphe <em><b>simple</b></em> est un graphe ne comportant ni boucles ni multi-arêtes, c'est-à-dire qu'aucun sommet n'est connecté à lui-même, et entre deux sommets il n'existe qu'une seule arête.</li>
                    <li>Dans un graphe <em><b>pondéré (ou valué)</b></em>, à chaque arête est associé un nombre (son poids), représentant par exemple une distance, un coût ou une capacité.</li>
                </ul>
                <p>Deux sommets reliés par une arête sont dits voisins ou adjacents.</p>
                <p>Formellement un graphe est <em><b>étiqueté</b></em> : chaque sommet ou arête appartient à un ensemble, donc porte une étiquette. Typiquement, les graphes sont étiquetés par des nombres entiers, mais une étiquette peut en fait appartenir à n'importe quel ensemble : ensemble de couleurs, ensemble de mots, ensemble des réels.</p>
                <div class="img_source">
                        <img src="../images/6n-graf.svg" alt="Graph 6 vertex">
                        <p>Source: <a href="https://fr.wikipedia.org/wiki/Th%C3%A9orie_des_graphes#/media/Fichier:6n-graf.svg">https://fr.wikipedia.org/wiki/Th%C3%A9orie_des_graphes#/media/Fichier:6n-graf.svg</a></p>
                </div>

                <p>Un graphe <em><b>complet</b></em> est un graphe simple dont tous les sommets sont adjacents deux à deux, c'est-à-dire que tout couple de sommets disjoints est relié par une arête. Si le graphe est orienté, on dit qu'il est complet si chaque paire de sommets est reliée par exactement deux arcs (un dans chaque sens).</p>
                <div class="img_source">
                        <img src="../images/Complete_graph_K5.svg" alt="Graphe complet K5">
                        <p>Source: <a href="https://fr.wikipedia.org/wiki/Graphe_complet#/media/Fichier:Complete_graph_K5.svg">https://fr.wikipedia.org/wiki/Graphe_complet#/media/Fichier:Complete_graph_K5.svg</a></p>
                </div>

                <p>Un graphe <b><em>planaire</em></b> est un graphe qui a la particularité de pouvoir se représenter sur un plan sans qu'aucune arête (ou arc pour un graphe orienté) n'en croise une autre. Autrement dit, ces graphes sont précisément ceux que l'on peut plonger dans le plan, ou encore les graphes dont le nombre de croisements est nul.</p>
                <p>Un <em><b>arbre</b></em> est un graphe qui vérifie les propriétés suivantes :</p>
                <ul>
                    <li><em><b>Connexité</b></em> : il est toujours possible d'aller d'un sommet à l'autre par un chemin d'arêtes. Dans le cas de la carte routière, cela revient à dire qu'il est toujours possible d'aller d'une ville à l'autre par la route.</li>
                    <li><em><b>Acyclique</b></em> : il est impossible de partir d'un sommet et d'y revenir sans rebrousser chemin à un moment.</li>
                </ul>
                <p>Un arbre est donc un graphe connexe et sans cycle.</p>
                <p>Les arbres en informatique sont souvent <em><b>enracinés</b></em>: un sommet porte le statut particulier de <b>racine</b>. Formellement, un arbre enraciné est un triplet (S,A,r) où (S,A) est un arbre et r est un élément de S appelé racine.</p>
                <div class="img_source">
                        <img src="../images/Binary_search_tree.svg" alt="Rooted tree">
                        <p>Source: <a href="https://en.wikipedia.org/wiki/Binary_search_tree#/media/File:Binary_search_tree.svg">https://en.wikipedia.org/wiki/Binary_search_tree#/media/File:Binary_search_tree.svg</a></p>
                </div>
                <p style="text-align: center"><i>(Oui les arbres en informatique pointent vers le bas)</i></p>
                <p>Pour un arbre, on peut définir les notions suivantes:</p>
                <ul>
                    <li><em><b>Hauteur</b></em> d'un sommet: Distance entre un sommet et la racine r</li>
                    <li><em><b>Enfant (ou fils)</b></em> d'un sommet: Sommet adjacent dont la hauteur vaut +1 par rapport au sommet actuel</li>
                    <li><em><b>Parent</b></em> d'un sommet: Sommet tel que le sommet actuel est son enfant</li>
                    <li><em><b>Feuille</b></em>: Sommet situé sur la dernière hauteur d'un arbre</li>
                </ul>
            </article>
            <div id="NextSection">
                <a href="course1.php"><button>Histoire de la Théorie des Graphes</button></a>
                <a href="course3.php"><button>Graphes: Théorèmes et propriétés utiles</button></a>
            </div>
        </section>


        <footer>
            <i><p>GT.com Copyright (c)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>
    </body>
</html>