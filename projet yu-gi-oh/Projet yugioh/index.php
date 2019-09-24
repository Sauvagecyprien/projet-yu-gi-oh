<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Yugioh;charset=utf8', 'Sullivan Gamin', 'NicolasGamin97422');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Projet yugioh/CSS/style.css">
    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <title>Yugi Deck Maker</title>
</head>

<body>


    <header>
        <div class="bannier"></div>
    </header>


    <div class="fond">

        <!-- The overlay -->
        <div id="myNav" class="overlay">



            <!-- Overlay content -->
            <div class="overlay-content ">





                <!-- premiere classe de la popup-->

                <div class="alignement">

                    <div class="popupdefiltre">
                        <h1>Type de Monstre</h1>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Normal

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Rituel

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Effet

                        </label>

                        <label class="container"> <input type="checkbox">
                            <span class="checkmark"></span>
                            Synchro

                        </label>
                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Pendule

                        </label>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Fusion

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Lien

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            XYZ

                        </label>

                    </div>

                    <!-- deuxieme classe de la popup-->


                    <div class="popupdefiltre">
                        <h1>Attribut</h1>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            LUMIERE

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            EAU

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            TERRE

                        </label>

                        <label class="container"> <input type="checkbox">
                            <span class="checkmark"></span>
                            DIVIN

                        </label>
                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            TENEBRES

                        </label>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            FEU

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            VENT

                        </label>

                    </div class="popupdefiltre">



                    <!-- troisieme classe de la popup-->




                    <div class="popupdefiltre">

                        <h1>Type</h1>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Dragon

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Démon

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Elfe

                        </label>

                        <label class="container"> <input type="checkbox">
                            <span class="checkmark"></span>
                            Bête-guerrier

                        </label>
                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Tonnerre

                        </label>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Aqua

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Serpent De Mer

                        </label>

                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Psychique

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Bête Ailée

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Machine

                        </label>

                        <label class="container"> <input type="checkbox">
                            <span class="checkmark"></span>
                            Zombie

                        </label>
                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Magicien


                    </div>

                    <div class="popupdefiltre" style="margin-top: 4%">
                        </label>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Dinosaure

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Pyro

                        </label>

                        <label class="container"> <input type="checkbox">
                            <span class="checkmark"></span>
                            Reptile

                        </label>
                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Bête

                        </label>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Rocher

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Wyrm

                        </label>

                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Plante

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Poisson

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Bête Divine

                        </label>

                        <label class="container"> <input type="checkbox">
                            <span class="checkmark"></span>
                            Guerrier

                        </label>
                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Insecte

                        </label>
                    </div>



                    <!-- quatrieme classe de la popup-->





                    <div class="popupdefiltre">
                        <h1>Niveau</h1>
                        </label>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Niveau 1

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Niveau 2

                        </label>

                        <label class="container"> <input type="checkbox">
                            <span class="checkmark"></span>
                            Niveau 3

                        </label>
                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Niveau 4

                        </label>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Niveau 5

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Niveau 6

                        </label>

                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Niveau 7

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Niveau 8

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Niveau 9

                        </label>

                        <label class="container"> <input type="checkbox">
                            <span class="checkmark"></span>
                            Niveau 10

                        </label>
                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Niveau 11

                        </label>
                        </label>
                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Niveau 12

                        </label>
                    </div>


                    <!-- cinquieme classe de la popup-->






                </div>


                <div style="margin-top: 10%; margin-left: 40%" class="alignement">
                    <button class="btn-sauvegarder" style=" width: 150px">Appliquer les filtres</button>
                    <button class="btn-sauvegarder" style="margin-left: 2%; width: 150px; height: 55px;"
                        onclick="closeNav()">Retour</button>
                </div>



            </div>



        </div>





















        <!-- The overlay2  magiques/pièges-->
        <div id="myNav2" class="overlay">



            <!-- Overlay content -->
            <div class="overlay-content ">

                <div class="alignement">

                    <div class="popupdefiltre" style="float: left">
                        <h1>Type de Magie</h1>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Magie Normal

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Magie Rituelle

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Magie De Terrain

                        </label>

                        <label class="container"> <input type="checkbox">
                            <span class="checkmark"></span>
                            Magie D'équipement

                        </label>
                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Magie Continue

                        </label>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Magie Jeu-Rapide

                        </label>


                    </div>





                    <!-- deuxieme classe de la popup-->




                    <div style="margin-left: 10%; margin-top: 25%" class="alignement">
                        <button class="btn-sauvegarder" style=" width: 150px; margin-right: 2%">Appliquer
                            les
                            filtres</button>
                        <button class="btn-sauvegarder" style=" margin-left: 2%; width: 150px; height: 55px"
                            onclick="closeNav2()">Retour</button>
                    </div>







                    <!-- deuxieme classe de la popup-->

                    <div class="popupdefiltre">
                        <h1>Piège</h1>
                        <label class="container"><input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            Piège Normal

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Piège continu

                        </label>

                        <label class="container"><input type="checkbox">
                            <span class="checkmark"></span>
                            Contre-Piège

                        </label>



                    </div>
                </div>
            </div>


        </div>



























        <div class="carte">
            <div class="haut_carte">

                <!-- ceci est le code pour la barre de recherche-->

                <form action="">
                    <input placeholder="Rechercher" id="Nom_Deck" class="Nom_du_deck"
                        style="width: 343px; margin-left:50px; position: relative; top: 15px; right: 50px;">
                    <input type="submit" class="valider" >
                </form>




                <!-- Use any element to open/show the overlay navigation menu -->
                <Button class="btn-sauvegarder" style="margin-left: 50px; margin-top:5%; width: 150px"
                    onclick="openNav()">Filtres Monstres</Button>
                <Button class="btn-sauvegarder" style="margin-left: 50px; margin-top:5%; width: 150px"
                    onclick="openNav2()">Filtres Magiques/Pièges</Button>
            </div>

            <div class="dropper bas_carte " id="style-6" style="height: 595px">
            <?php $reponse = $bdd->query('SELECT * FROM Cartes');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{


?>
    
    <div class="draggable" id="<?php echo $donnees['Num']?>">
        <img src="<?php echo $donnees['image_miniature'] ?>" id="<?php echo $donnees['Num']?>" class="cartededos">
    </div>
    
<?php
}
?>

            </div>



        </div>
        <div class="deck">
            <div class="haut_deck">
                <form action="">
                    <input placeholder="Nom du Deck" id="Nom_Deck" class="Nom_du_deck">
                </form>
                <div class="description_deck">
                    <div>
                        <p>Deck : <span id="nombre_deck">0</span>/<span id="max_deck">60</span></p>
                    </div>
                    <div>
                        <p>Extra Deck : <span id="nombre_extra_deck">0</span>/<span id="max_extra_deck">15</span></p>
                    </div>
                    

                </div>
                <div class="div_form_trier">
                    <div class="form_trier">
                        <!--<form >-->
                        <div>
                            <label class="Trie">Trier par :</label>
                            <select class="select-css" id="trier_par">
                                <option id="a-z">A-Z</option>
                                <option id="type_de_carte">Type de cartes</option>
                                <option selected id="niveaux">Niveaux</option>
                            </select>
                        </div>
                        <div>
                            <label class="Trie">Formats :</label>
                            <select class="select-css" id="formats" onchange="lol()">
                                <option id="classique">Classique</option>
                                <option id="avance">Avancé</option>
                                <option id="speed_duel" value="5">Speed Duel</option>
                                <option id="aucun">Aucun</option>
                            </select>
                        </div>
                        <div class="sauvegarder">
                            <form action="index.php" method="get">
                            <button type="submit" class="btn-sauvegarder">Sauvegarder</button>
                            </form>
                        </div>
                        <!--</form>-->
                    </div>


                </div>
            </div>
            <div class="bas_de_deck" id="conteneur_deck">
                <div class="bas_de_deck_partie" id="deck">
                    <div class="titre " >
                        <h1>Deck</h1>
                    </div>
                    <div class="carte_deck dropper" id="style-6"style="height: 60%; width:100%">


                    </div>
                </div>
                <div class="bas_de_deck_partie" id="extra_deck">
                    <div class="titre">
                        <h1> Extra Deck</h1>
                    </div>
                    <div class="carte_deck dropper" id="style-6" style="height: 60%; width:100%">

                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <footer>
        <div class="basdepage"><img src="../Projet yugioh/images/basdepage.png"></div>
    </footer>
    <script src="JS/script.js"></script>
    <script>

        (function () {

            
            var dndHandler = {

                draggedElement: null, // Propriété pointant vers l'élément en cours de déplacement

                applyDragEvents: function (element) {

                    element.draggable = true;

                    var dndHandler = this; // Cette variable est nécessaire pour que l'événement « dragstart » ci-dessous accède facilement au namespace « dndHandler »

                    element.addEventListener('dragstart', function (e) {
                        dndHandler.draggedElement = e.target; // On sauvegarde l'élément en cours de déplacement
                        e.dataTransfer.setData('text/plain', ''); // Nécessaire pour Firefox
                    });

                },

                applyDropEvents: function (dropper) {

                    dropper.addEventListener('dragover', function (e) {
                        e.preventDefault(); // On autorise le drop d'éléments
                        this.className = 'dropper drop_hover bas_carte'; // Et on applique le style adéquat à notre zone de drop quand un élément la survole

                    });

                    dropper.addEventListener('dragleave', function () {
                        this.className = 'dropper bas_carte'; // On revient au style de base lorsque l'élément quitte la zone de drop
                    });

                    var dndHandler = this; // Cette variable est nécessaire pour que l'événement « drop » ci-dessous accède facilement au namespace « dndHandler »

                    dropper.addEventListener('drop', function (e) {

                        var target = e.target,
                            draggedElement = dndHandler.draggedElement, // Récupération de l'élément concerné
                            clonedElement = draggedElement.cloneNode(true); // On créé immédiatement le clone de cet élément
                            

                        while (target.className.indexOf('dropper') == -1) { // Cette boucle permet de remonter jusqu'à la zone de drop parente
                            target = target.parentNode;
                        }

                        target.className = 'dropper bas_carte'; // Application du style par défaut

                        clonedElement = target.appendChild(clonedElement); // Ajout de l'élément cloné à la zone de drop actuelle
                        dndHandler.applyDragEvents(clonedElement); // Nouvelle application des événements qui ont été perdus lors du cloneNode()

                        draggedElement.parentNode.removeChild(draggedElement); // Suppression de l'élément d'origine

                    });

                }

            };

            var elements = document.querySelectorAll('.draggable'),
                elementsLen = elements.length;

            for (var i = 0; i < elementsLen; i++) {
                dndHandler.applyDragEvents(elements[i]); // Application des paramètres nécessaires aux éléments déplaçables
            }

            var droppers = document.querySelectorAll('.dropper'),
                droppersLen = droppers.length;

            for (var i = 0; i < droppersLen; i++) {
                dndHandler.applyDropEvents(droppers[i]); // Application des événements nécessaires aux zones de drop
            }

        })();
        
   
        
        </script>
        <?php

$document_xml = new DOMDocument();
$document_xml->loadXML($xml);
$elements = $document_xml->getElementsById('conteneur_deck');
foreach ($elements as $node) {
    //$idtest = $node->getElementsByTagName('DATEMAJ');
    //$idElem = $node->getElementsByTagName('ID');
    //$idList[] = $idElem->item(0)->nodeValue;
    echo $elements;
 }

?>
</body>

</html>





