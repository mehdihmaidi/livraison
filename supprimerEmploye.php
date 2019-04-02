<?PHP
include "employeC.php";
$livreurC=new LivreurC();
if (isset($_POST["cin"])){
	$livreurC->supprimerLivreur($_POST["cin"]);
	header('Location: product-list.html');
}

?>