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
                <h1>Structures de données utiles & implémentations</h1>

                <h2>
                    Les piles
                </h2>
                <p>Une pile est une structure de données qui permet de stocker des éléments en respectant la règle du "dernier arrivé, premier sorti" (Last In, First Out, LIFO). On peut imaginer une pile d'assiettes: on ne peut retirer que l'assiette du dessus, et on ne peut ajouter une assiette que sur le dessus de la pile.</p>
                <p>Les opérations de base sur une pile sont:</p>
                <ul>
                    <li>push(x): ajoute l'élément x au sommet de la pile</li>
                    <li>pop(): retire l'élément au sommet de la pile</li>
                    <li>top(): retourne l'élément au sommet de la pile</li>
                    <li>empty(): retourne vrai si la pile est vide, faux sinon</li>
                </ul>
                <p>On peut implémenter une pile en utilisant une liste chaînée ou un tableau. Voici une implémentation en Python:</p>
                <code>
                    <pre>
                        class Stack:
                            def __init__(self):
                                self.items = []

                            def isEmpty(self):
                                return self.items == []

                            def push(self, item):
                                self.items.append(item)

                            def pop(self):
                                return self.items.pop()

                            def peek(self):
                                return self.items[len(self.items)-1]

                            def size(self):
                                return len(self.items)
                    </pre>
                </code>

                <h2>
                    Les files
                </h2>
                <p>Une file est une structure de données qui permet de stocker des éléments en respectant la règle du "premier arrivé, premier sorti" (First In, First Out, FIFO). On peut imaginer une file d'attente: on ne peut retirer que la personne qui attend depuis le plus longtemps, et on ne peut ajouter une personne qu'à la fin de la file.</p>
                <p>Les opérations de base sur une file sont:</p>
                <ul>
                    <li>enqueue(x): ajoute l'élément x à la fin de la file</li>
                    <li>dequeue(): retire l'élément au début de la file</li>
                    <li>front(): retourne l'élément au début de la file</li>
                    <li>empty(): retourne vrai si la file est vide, faux sinon</li>
                </ul>
                <p>On peut implémenter une file en utilisant une liste chaînée ou un tableau. Voici une implémentation en Python:</p>
                <code>
                    <pre>
                        class Queue:
                            def __init__(self):
                                self.items = []

                            def isEmpty(self):
                                return self.items == []

                            def enqueue(self, item):
                                self.items.insert(0,item)

                            def dequeue(self):
                                return self.items.pop()

                            def size(self):
                                return len(self.items)
                    </pre>
                </code>
                <p><i>Remarque: On peut s'amuser à faire des "opérations de composition" de nos structure de données. Par exemple, une double pile n'est ni plus ni moins qu'une file</i></p>
                
                <h2>
                    Graphes
                </h2>
                <p>Il existe deux implémentations pour les graphes: celle utilisant une <a href="https://fr.wikipedia.org/wiki/Matrice_d%27adjacence">matrice d'adjacence</a> ou celle utilisant des <a href="https://fr.wikipedia.org/wiki/Liste_d%27adjacence">listes d'adjacence</a></p>
                <p>La matrice d'adjacence est une matrice carrée de taille n x n (n étant le nombre de sommets du graphe) dont les lignes et les colonnes sont indexées par les sommets du graphe. Si le sommet i est adjacent au sommet j, alors la case (i,j) de la matrice vaut 1, sinon elle vaut 0. Si le graphe est valué, on peut remplacer les 1 par les valeurs des arêtes.</p>
                <p>Les listes d'adjacence sont des listes chaînées dont les éléments sont les sommets adjacents à un sommet donné. Si le graphe est valué, on peut remplacer les sommets par des couples (sommet, valeur).</p>
                <p>Il faut aussi considérer la Complexité des implémentations, voici un tableau récapitulatif:</p>
                <table id="table">
                    <tr>
                        <th>Opération</th>
                        <th>Matrice d'adjacence</th>
                        <th>Listes d'adjacence</th>
                    </tr>
                    <tr>
                        <td>Accéder à l'arête (i,j)</td>
                        <td>Θ(1)</td>
                        <td>Θ(degré(i))</td>
                    </tr>
                    <tr>
                        <td>Accéder à l'arête (i,j)</td>
                        <td>Θ(1)</td>
                        <td>Θ(degré(i))</td>
                    </tr>
                    <tr>
                        <td>Parcourir les arêtes</td>
                        <td>Θ(n²)</td>
                        <td>Θ(m)</td>
                    </tr>
                    <tr>
                        <td>Parcourir les sommets adjacents à i</td>
                        <td>Θ(n)</td>
                        <td>Θ(degré(i))</td>
                    </tr>
                </table>
                <p>Voici une implémentation possible de graphe avec une matrice d'adjacence en Python:</p>
                <code>
                    <pre>
                        class Graph:
                            def __init__(self, numVertices):
                                self.adjMatrix = [[-1] * numVertices for _ in range(numVertices)]
                                self.numVertices = numVertices
                                self.vertices = {}
                                self.verticesList = [0] * numVertices

                            def set_vertex(self, vtx, id):
                                if 0 <= vtx <= self.numVertices:
                                    self.vertices[id] = vtx
                                    self.verticesList[vtx] = id

                            def set_edge(self, frm, to, cost=0):
                                frm = self.vertices[frm]
                                to = self.vertices[to]
                                self.adjMatrix[frm][to] = cost
                                #for directed graph do not add this
                                self.adjMatrix[to][frm] = cost

                            def get_vertex(self):
                                return self.verticesList

                            def get_edges(self):
                                edges = []
                                for i in range (self.numVertices):
                                    for j in range (self.numVertices):
                                        if (self.adjMatrix[i][j] != -1):
                                            edges.append((self.verticesList[i],self.verticesList[j],self.adjMatrix[i][j]))
                                return edges

                            def get_matrix (self):
                                return self.adjMatrix
                    </pre>
                </code>
            </article>
            <div id="NextSection">
                <a href="course3.php"><button>Graphes: Théorèmes et propriétés</button></a>
                <a href="../courses.php"><button>Liste des cours</button></a>
            </div>
        </section>


        <footer>
            <i><p>GT.com Copyright (c)<br/>Your favorite graph theory website since 2023</p></i>
        </footer>
    </body>
</html>