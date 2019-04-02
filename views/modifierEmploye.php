<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/employe.php";
include "../core/employeC.php";
if (isset($_GET['cin'])){
	$livreurC=new LivreurC();
    $result=$livreurC->chercherLivreur($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$telephonne=$row['telephonne'];
		$email=$row['email'];
        $zone=$row['zone']
?>
<form method="POST">
<table>
<caption>Modifier Livreur</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Telephonne</td>
<td><input type="number" name="telephonne" value="<?PHP echo $telephonne ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>Zone</td>
<td><input type="text" name="zone" value="<?PHP echo $zone ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livreur=new Livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['telephonne'],$_POST['email'],$_POST['zone']);
	$livreurC->modifierLivreur($livreur,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherEmploye.php');
}
?>
</body>
</HTML>