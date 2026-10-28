
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<!-- EXO 1 --> 
<!-- <body>
	<h1>EXO 1</h1>
	<form action="" method="post">
		<input type="number" name="prix_ht" placeholder="saisir le prix hors taxe" <?= $_POST["prix_ht"] ?? " " ?>>
		<input type="number" name="nb_article" placeholder="saisir le nombre d'article" <?= $_POST["nb_article"] ?? " " ?>>
		<input type="number" name="tx_tva" placeholder="saisir le taux de tva" <?= $_POST["tx_tva"] ?? " " ?>>
		<input type="submit" value="envoyer" name="submit">
	</form>
</body>
</html> -->

<?php
/*
if (isset($_POST["submit"])){
	if (!empty($_POST["prix_ht"]) && !empty($_POST["nb_article"]) && !empty($_POST["tx_tva"])){
		echo htmlspecialchars("Le prix TTC est égal à : " .$_POST["prix_ht"] * $_POST["nb_article"] * (1 + $_POST["tx_tva"]/100)) . "€";
	}
}
*/
?> 

<!-- EXO 2 --> 
<body>
	<h1>EXO 2</h1>
	<form action="" method="post">
		<input type="text" name="nbr1" placeholder="saisir un nombre" <?= $_POST["nbr1"] ?? " " ?>>
		<select name="operateur">
			<option value="add">Addition</option>
			<option value="sous">Soustraction</option>
			<option value="mult">Multiplication</option>
			<option value="div">Division</option>
		</select>
		<input type="text" name="nbr2" placeholder="saisir un nombre" <?= $_POST["nbr2"] ?? " " ?>>
		<input type="submit" value="calculer" name="calculer">
	</form>
</body>
</html>

<?php
const CORRESPONDANCE = [
	"add" => "+",
	"sous"=> "-",
	"mult"=> "x",
	"div" => "/"
];

function traitement():string{
	if (!isset($_POST["calculer"])){
		return "Formulaire non sousmis";
	};
	if (!isset($_POST["nbr1"]) && !isset($_POST["nbr2"]) && !isset($_POST["operateur"])){
		return "Champs vide";
	};
	if(!is_numeric($_POST["nbr1"]) && !is_numeric($_POST["nbr2"])){
		return "Nombre invalides";
	}
	$result = match($_POST["operateur"]){
		"add"  => $_POST["nbr1"] + $_POST["nbr2"],
		"sous" => $_POST["nbr1"] - $_POST["nbr2"],
		"mult" => $_POST["nbr1"] * $_POST["nbr2"],
		"div"  => $_POST["nbr2"]!=0 ? $_POST["nbr1"] / $_POST["nbr2"] : "division impossible",
		default  => "Operateur inconnu"	
	};
	$msg = $_POST["nbr1"] . CORRESPONDANCE[$_POST["operateur"]] . $_POST["nbr2"] . "=" . $result;
	return $msg;

}
echo traitement();
