<a class="lien-bout ac" href="index.php">acceuille</a>
</header>

	<form class="form-ins" action="index.php" method="post">
		<label>Nom</label><input type="text" name="nom">
		<label>Prenom</label><input type="text" name="prenom">
		<label>login</label><input type="text" name="login">
		<label>Mot de passe</label><input type="password" name="mdp">
		<label>Confirmer mot de passe</label><input type="password" name="remdp">
		<input type="submit" name="env-ins">
	</form>
<?php  
if(isset($_SESSION['err']))
{
	echo $_SESSION['err'];
	unset($_SESSION['err']);
}
	?>
<!-- milieu !-->