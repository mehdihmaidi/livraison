<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";

if (isset($_POST['id'])and isset($_POST['destination']) and isset($_POST['client']) and isset($_POST['livreur']) and isset($_POST['localisation']))
{
$livraison1=new Livraison($_POST['id'],$_POST['destination'],$_POST['client'],$_POST['livreur'],$_POST['localisation']);
$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);
header('Location: afficherLivraison.php');
}
    else
    {
	echo "vérifier les champs";
}
?>