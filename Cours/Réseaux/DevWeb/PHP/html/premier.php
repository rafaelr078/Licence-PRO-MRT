<?php
     echo "salut tout le monde !" ; #affichage de la phrase « salut tout le monde ! »
     print("salut tout le monde") ; #affichage de la phrase « salut tout le monde ! »
     
     #je suis un commentaire
     //je suis un commentaire
     /*je suis un commentaire*/ 
?>
<br></br>
<?php
// ... (code de l'exercice 1 : echo/print/commentaires)

# Définition des variables
$operande1 = 5; // Un entier
$operande2 = 6; // Un autre entier

# Calcul
$résultat = $operande1 + $operande2;

# Affichage du résultat
echo "Le résultat de l'opération est : ";
print($résultat);
echo "<br />"; 
echo "le résultat est : ".$résultat."<br />"; //
echo "<br />"; 

# Utilisation du "if" (Exercice 6)
if ($résultat > 10) {
    echo "Votre résultat est supérieur à 10<br />";
}
// Si $résultat était <= 10, rien ne s'afficherait ici.
echo "<br />"; 
?>


<?php
// ... (variables et calcul de l'addition)

# Définition d'une constante (avec define)
define("PI", 3.14159);

# Affichage de la constante
echo "La constante PI est définie à : " . PI . "<br />";
?>


<?php
// ... (Code des exercices 1 à 4)

//      Exemple de concaténation :
$mot1 = "bonjour" ;
$mot2 = "tout" ;
$mot3 = "le" ;
$mot4 = "monde";

// Première méthode : concaténation dans l'affichage (avec un espace entre les mots)
echo "concaténation : ".$mot1." ".$mot2." ".$mot3." ".$mot4."<br />" ;

// Deuxième méthode : concaténation des mots (sans espace) pour créer une nouvelle variable
$mot5 = "".$mot1.$mot2.$mot3.$mot4 ;

// Affichage de la nouvelle variable
print($mot5) ;

?>
<br></br>


<?php
// ... (Code des exercices précédents)

// Exercice 7 : Boucle for pour afficher "salut" 20 fois
echo "<h3>Exercice 7 - Boucle FOR :</h3>";

// Boucle de $i = 1 à 20.
// $i++ permet d'incrémenter la variable d'une unité[cite: 79].
for ($i = 1; $i <= 20; $i++) {
    // Affichage du mot "salut" suivi du numéro du compteur
    // On utilise la concaténation (opérateur '.') pour assembler le texte et la variable
    echo "salut n°" . $i . "<br />";
}
?>




<?php
// ... (Code des exercices précédents)

echo "<h3>Exercice 8 - Combinaison FOR et IF :</h3>";

// Reprise de la boucle for de l'exercice 7
for ($i = 1; $i <= 20; $i++) {
    // Affichage standard du mot "salut" et du numéro du compteur
    echo "salut n°" . $i;

    // Condition ajoutée pour l'exercice 8 :
    if ($i < 7) {
        echo " - inf à 7"; // Affichage du message si le compteur est inférieur à 7
    }

    echo "<br />"; // Saut de ligne pour l'affichage
}
?>


<?php
$couleur = "jaune"; 

// Test 1 : $couleur = "jaune"
echo "Test 1 : ";
Switch($couleur) {
    case "bleu": 
        print("bleu"); 
        break;
    case "jaune": 
        print("jaune"); // C'est ce cas qui est exécuté.
        break;
    default: 
        print("je ne connais pas cette couleur"); 
        break;
}
echo "<br />";
?>


<?php
// ... (Code des exercices 1 à 8)

// ------------------------------------
// Préparation des variables (Exercice 2)
// ------------------------------------
$operande1 = 5;
$operande2 = 6;
$résultat = $operande1 + $operande2; // $résultat vaut 11

echo "<h3>Exercice 9 - SWITCH intégré dans la boucle FOR :</h3>";

// ------------------------------------
// Boucle for (Exercice 7)
// ------------------------------------
for ($i = 1; $i <= 20; $i++) {
    echo "salut n°" . $i . " - ";

    // ------------------------------------
    // Ajout du SWITCH (Exercice 9)
    // ------------------------------------
    Switch($résultat) { // On évalue la valeur de $résultat (qui est 11)
        case 11:
            print("onze"); // cas où résultat = 11 [cite: 104]
            break;
        case 10:
            print("dix"); // cas où résultat = 10 [cite: 105]
            break;
        case 1:
            print("un"); // cas où résultat = 1 [cite: 106]
            break;
        default:
            print("pas ok"); // cas par défaut [cite: 107]
            break;
    }

    echo "<br />";
}
?>