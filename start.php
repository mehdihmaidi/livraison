<?PHP
include "../entities/employe.php";
include "../core/employeC.php";
$livreur=new Livreur(75757575,'BEN Ahmed','Salah',50,'@gmail.com','tunis');
$livreurC=new LivreurC();
$livreurC->afficherLivreur($livreur);
echo "****************";
echo "<br>";
echo "cin:".$livreur->getCin();
echo "<br>";
echo "nom:".$livreur->getNom();
echo "<br>";
echo "prenom:".$livreur->getPrenom();
echo "<br>";
echo "telephonne:".$livreur->getTelephonne();
echo "<br>";
echo "email:".$livreur->getEmail();
echo "<br>";
echo "zone:".$livreur->getZone();
echo "<br>";
?>