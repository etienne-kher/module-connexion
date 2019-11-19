</header>

<?php
$bd=mysqli_connect("localhost","root","","moduleconnexion");
$sql="select id, login , prenom , nom from utilisateurs;";
$envoit=mysqli_query($bd,$sql);
$reception=mysqli_fetch_all($envoit);
echo "<table><tr><th>id</th><th>login</th><th>prenom</th><th>nom</th><tr>";
foreach ($reception as $user)
{		
	echo "<tr>";
	foreach ($user as $categorie ) 
	{
		echo"<td> $categorie </td>";
	}
		echo "<tr>";		
}
echo "</table>";
mysqli_close($bd);
?>
<form action="index.php" method="post">
	<label>suprimer un utilisateur :</label>
	<input type="number" name="idsup" placeholder="Id">
	<input type="submit" name="supr" value="Ejecter !">	
</form>
<!-- milieu !-->