<?PHP
include "../core/livreurC.php";
$livreur1C=new LivreurC();
$listeLivreurs=$livreur1C->afficherLivreurs();
?>
<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>Telephonne</td>
<td>Email</td>
<td>Zone</td>
<td>Status</td>
<td>supprimer</td>
<td>modifier</td>
<td>contacter</td>
</tr>

<?PHP
foreach($listeLivreurs as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['telephonne']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
    <td><?PHP echo $row['zone']; ?></td>
    <td><?PHP echo $row['status']; ?></td>
	<td><form method="POST" action="supprimerLivreur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierLivreur.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
        <td><a href="mailto:<?PHP echo $row['email']; ?>">
	Contacter</a></td>
	</tr>
	<?PHP
}
?>
</table>


