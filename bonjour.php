<?php

// // Exercice 1
// echo "Bonjour le monde ! \n Bienvenue dans le cours de PHP \n"; 

// // Exercice 2
// $prenom = "benoit";
// $nom = "vicaire";
// $age = 32;
// $ville = "Toulouse";

// echo "Je m'appelle $prenom $nom.\nJ'ai $age ans. \nJe vie à $ville \n";

// // Exercice 3
// const PI = 3.14159;
// const TVA = 20;

// echo "La valeur de PI est :" . PI . "\n";
// echo "La tva est de : " . TVA . "\n";

// // Exercice 4
// $prix_ht = 20;
// $nb_article = 4;
// $prix_ttc = $prix_ht * $nb_article * (1 + TVA / 100);
// echo "Le prix HT est de : $prix_ht €, le nombre d'article est de : $nb_article, la TVA est à " . TVA . "\nLe prix ttc est de : $prix_ttc € \n";

// // Exercice 5
// $prenom2 = readline("Quel est votre prénom?");
// echo "Bonjour $prenom2 \n";

// // Exercice 6
// $age2 = readline("Quel age avez vous? \n");
// echo "Vous avez $age2 ans. \nL'année prochaine vous aurez " .$age2+1 . " ans \n";

// // Exercice 7
// $number = readline("Choisissez un nombre! ");

// echo "Votre nombre est " . ($number % 2 == 0 ? "pair" : "impair") . "\n";

// // Exercice 8

// $age3 = readline("Quel est votre age? \n");
// echo "Vous êtes " . ($age3 >= 18 ? "majeur" : "mineur") . "\n";

// // Exercice 9

// $nb1 = readline("nombre 1 ? \n"); 
// $nb2 = readline("nombre 2 ? \n"); 

// switch (true) {
// 	case !is_numeric($nb1) || !is_numeric($nb2):
// 		echo "Veuillez entrez des nombres";
// 		break;
// 	case ($nb1 > $nb2):
// 		echo "Le nombre 1 est plus grand que le nombre 2";
// 		break;
// 	case ($nb1 < $nb2): 
// 		echo "Le nombre 1 est plus petit que le nombre 2";
// 		break;
// 	default:
// 		echo "Les deux nombres sont égaux";
// 		break;
// }

// // Exercice 10
// $temp = readline("Quel température fait il aujourd'hui? \n");

// $msg = match(true){
// 	!is_numeric($temp) => "Merci de saisir une température valide!",
// 	$temp <= 0 => "Il gèle!",
// 	$temp < 15 => "Il fait frisquet",
// 	$temp < 25 => "Il fait bon",
// 	default => "Il faut chaud",
// };

// echo $msg;

// // Exercice 11

// $prenom3 = readline ("Prénom ? \n");
// $nom3 = readline ("Nom ? \n");
// $age4 = readline ("Age ? \n");
// $ville2 = readline ("Ville ? \n");

// echo "-------------------------" . "\n" . "Fiche utilisateur" . "\n" . "-------------------------" . "\n" . "Nom : $nom3" . "\n" . "Prénom : $prenom3" . "\n" . "Age : $age4" . "\n" . "Ville : $ville2";

// // Exercice 12 

// $secret = 8;

// $guess = readline("Devines le nombre!" . "\n");

// if($guess == $secret){
// 	echo "Quel mentalise!";
// }else {
// 	echo "Noob!";
// };

// // Exercice 13
// $nombre1 = readline("Nombre 1 ?" . "\n");
// $operateur = readline("opérateur ?" . "\n");
// $nombre2 = readline("Nombre 2 ?" . "\n");

// $operateurs = ["*","/","+","-"];

// switch(true){
// 	case !is_numeric($nombre1) || !is_numeric($nombre2) :
// 		echo "Nombres non valides!";
// 		break;
// 	case !in_array($operateur, $operateurs, true) :
// 		echo "opérateur invalide";
// 		break;
// 	case $operateur === "/" && $nombre2 == 0 :
// 		echo "Malheureux! on ne peux pas divisier par 0!";
// 		break;
// 	default:
// 		$resultat = match($operateur){
// 			"*" => $nombre1 * $nombre2,
// 			"/" => $nombre1 / $nombre2,
// 			"+" => $nombre1 + $nombre2,
// 			"-" => $nombre1 - $nombre2,
// 		};
// 		echo "Résultat : $resultat";
// }
// echo "\n";

// // Exercice 14

// $note1 = readline("Note 1 ?" . "\n");
// $note2 = readline("Note 2 ?" . "\n");
// $note3 = readline("Note 3 ?" . "\n");
// function mention(float $note): string{
// 	return match (true){
// 		$note < 12 => "Passable",
// 		$note < 14 => "Assez bien",
// 		$note < 16 => "Bien",
// 		default => "Très bien",
// 	};
// };
// $notes = [$note1, $note2, $note3];

// 	if (!is_numeric($note1) || !is_numeric($note2) || !is_numeric($note3)){
// 		echo "Note invalide\n";
// 	} else {
		
// 			if($note1 > 10){
// 				echo "Note $note1 : Admis avec mention " . mention($note1) . "\n";
// 			} else {
// 				echo "Note $note1 : Non admis" . "\n";
// 			};
// 			if($note2 > 10){
// 				echo "Note $note2 : Admis avec mention " . mention($note2) . "\n";
// 			} else {
// 				echo "Note $note2 : Non admis" . "\n";
// 			};
// 			if($note3 > 10){
// 				echo "Note $note3 : Admis avec mention " . mention($note3) . "\n";
// 			} else {
// 				echo "Note $note3 : Non admis" . "\n";
// 			};   
		
// 	echo "Moyenne génèrale : ". ($note1 + $note2 + $note3 )/3 . "\n";
// }

// // Exercice 15

// Version boucle
// $nombres = [];
// for ($i = 1; $i <=5; $i++){
// 	$nombres[] = readline("Nombre $i ? ");
// }
// $max=$nombres[0];
// foreach ($nombres as $nb){
// 	echo($nb . " ");
// 	if($nb>$max){
// 		$max=$nb;
// 	}
// }
// echo "Le nombre le plus grand est : $max";

// Version systeme D

// $nombre1 = readline("Nombre 1 : ");
// $nombre2 = readline("Nombre 2 : ");
// $nombre3 = readline("Nombre 3 : ");
// $nombre4 = readline("Nombre 4 : ");
// $nombre5 = readline("Nombre 5 : ");

// echo $nombre1 . " " . $nombre2 . " " . $nombre3 . " " . $nombre4 . " " . $nombre5 . "\n";
// $max = $nombre1;
// if($nombre2>$max){
// 	$max = $nombre2;
// }
// if($nombre3>$max){
// 	$max = $nombre3;
// }
// if($nombre4>$max){
// 	$max = $nombre4;
// }
// if($nombre5>$max){
// 	$max = $nombre5;
// }
// echo "Le nombre le plus grand est : " . $max ;

// // Exercice 16

// $nombre1 = readline("Nombre 1 : ");
// $nombre2 = readline("Nombre 2 : ");
// $nombre3 = readline("Nombre 3 : ");
// $nombre4 = readline("Nombre 4 : ");
// $nombre5 = readline("Nombre 5 : ");

// echo $nombre1 . " " . $nombre2 . " " . $nombre3 . " " . $nombre4 . " " . $nombre5 . "\n";
// $min = $nombre1;
// if($nombre2<$min){
// 	$min = $nombre2;
// }
// if($nombre3<$min){
// 	$min = $nombre3;
// }
// if($nombre4<$min){
// 	$min = $nombre4;
// }
// if($nombre5<$min){
// 	$min = $nombre5;
// }
// echo "Le nombre le plus petit est : " . $min ;

// // Exercice 17

// $prenom = readline("Quel est votre prénom? : ");
// echo "Votre prénom contient " . strlen($prenom) . " lettres" ;

// // Exercice 18
// $prenom = readline("Prenom ? ");
// $nom = readline("Nom ? ");

// echo ucfirst($prenom) . " " . strtoupper($nom);

// // Exercice 19
// $mail = readline("Mail ? :". "\n");

// echo str_contains($mail, "@") ? "Adresse valide" : "Non valide";

// // Exercice 20

// const PASSWORD = "php2026";

// $pwd = readline("Votre mot de passe? : ");
// echo PASSWORD == $pwd ? "Connexion réussie" : "Connexion refusée"; 

// // Exercice 21 

// $prenom = readline("Prenom? : \n");
// echo "Bonjour " . trim($prenom) . " nettoyé";

// Exercice 22
$prenom = readline("Prenom? : \n");
$nom = readline("Nom? : \n");

echo "Bonjour " . strtoupper($prenom[0]) . "." . strtoupper($nom[0]);   