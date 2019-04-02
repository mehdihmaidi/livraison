<?PHP
include "../core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["id"])){
	$livraisonC->supprimerLivraison($_POST["id"]);
	header('Location: afficherLivraison.php');
}

?>