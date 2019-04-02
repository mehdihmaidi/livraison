<?PHP
include "../core/employeC.php";
$livreurC=new LivreurC();
if (isset($_POST["cin"])){
	$livreurC->supprimerLivreur($_POST["cin"]);
	header('Location: afficherEmploye.php');
}

?>