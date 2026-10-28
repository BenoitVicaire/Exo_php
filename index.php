
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
<!-- <body>
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
-->
<?php
/*
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
*/
?>

<!-- EXO 3 --> 
<!-- <body>
	<h1>EXO 3</h1>
	<form action="" method="post">
		<input type="mail" name="email" placeholder="saisir un email" <?= $_POST["email"] ?? " " ?>>
		<input type="password" name="password" placeholder="saisir un mot de passe">
		<input type="submit" value="connexion" name="connexion">
	</form>
</body>
</html>
-->

<?php
/*
const EMAIL = "admin@test.com";
const PASSWORD = "php2026";

function traitement():string{
	if (!isset($_POST["connexion"])){
		return "Formulaire non soumis";
	};
	if(!isset($_POST["email"]) && !isset($_POST["password"])){
		return "champs vide";
	}
	if($_POST["email"]!=EMAIL){
		return "Email incorrect";
	}
	if($_POST["password"]!=PASSWORD){
		return "Password incorrect";
	}
	return "Connexion réussie";
};

echo traitement();
*/
?>
<!-- EXO 4 -->
<body>
	<h1>EXO 4</h1>
	<form action="" method="post">
		<input type="text" name="nom" placeholder="saisir un nom" >
		<input type="text" name="prenom" placeholder="saisir un prenom">
		<input type="email" name="mail" placeholder="saisir un email" >
		<input type="password" name="password" placeholder="saisir un mot de passe">
		<input type="password" name="passwordVerif" placeholder="confirmer le mot de passe">
		<input type="date" name="bDay" placeholder="Saisir la date de naissance">
		<input type="submit" value="inscription" name="inscription">
	</form>
</body>
</html>

<?php
function traitement():string{

	if(!isset($_POST["inscription"])){
		return "formulaire non soumis";
	}
	foreach (["nom", "prenom", "mail", "password", "passwordVerif", "bDay"] as $champ) {
    if (empty(trim($_POST[$champ]))) {
        return "Champ vide";
    }
}
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$mail=$_POST["mail"];
	$password=$_POST["password"];
	$passwordVerif=$_POST["passwordVerif"];
	$bDay=new DateTime($_POST["bDay"]);

	if(strlen($nom)<2 || strlen($prenom)<2){
		return "Le nom et le prénom doivent contenir au moins 2 caractères";
	}
	if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
		return "Email invalide";
	}
	if(strlen($password)<8){
		return "Mot de passe trop court (8caractère minimum)";
	}
	if(!preg_match('/[A-Z]/',$password)){
		return "Au moins une majuscule dans le mot de passe";
	}
	if(!preg_match('/[a-z]/',$password)){
		return "Au moins une minuscule dans le mot de passe";
	}
	if(!preg_match('/\d/',$password)){
		return "Au moins un chiffre dans le mot de passe";
	}

	if($password !== $passwordVerif){
		return "Les deux mots de passes ne correspondent pas";
	}
	if($bDay > new DateTime()){
		return "Vous ne pouvez pas être né dans le futur!";
	}
	if($bDay ->diff(new DateTime())->y <18){
		return "Vous devez avoir plus de 18 ans pour vous inscrire a ce site pour adulte (impot.gouv)";
	}
	$nom=htmlspecialchars($nom);
	$prenom=htmlspecialchars($prenom);
	$mail=htmlspecialchars($mail);
	$displayBDay=htmlspecialchars($_POST["bDay"]);
	$msg = "Inscription réussie! <br>" . "Nom : $nom <br> Prenom: $prenom <br> mail : $mail <br> date de naissance : " . $displayBDay  ;
	return $msg;
}
echo traitement();