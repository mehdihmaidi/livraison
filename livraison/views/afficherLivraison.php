<?PHP
include "../core/livraisonC.php";
$livraison1C=new LivraisonC();
$listeLivraisons=$livraison1C->afficherLivraisons();
?>
<table border="1">
<tr>
<td>ID</td>
<td>ID client</td>
<td>Destination</td>
<td>ID livreur</td>
<td>Localisation</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeLivraisons as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['client']; ?></td>
	<td><?PHP echo $row['destination']; ?></td>
	<td><?PHP echo $row['livreur']; ?></td>
	<td><?PHP echo $row['localisation']; ?></td>
	<td><form method="POST" action="supprimerLivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierLivraison.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


