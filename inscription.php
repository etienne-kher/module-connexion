<a class="lien-bout ac" href="index.php">accueil</a>
</header>

	<form class="form-ins" action="index.php" method="post">
		<label>Nom</label><input class="inp-form" type="text" name="nom" required>
		<label>Prenom</label><input class="inp-form" type="text" name="prenom" required>
		<label>login</label><input class="inp-form" type="text" name="login" required>
		<label>Mot de passe</label><input class="inp-form" type="password" name="mdp" required>
		<label>Confirmer mot de passe</label><input class="inp-form" type="password" name="remdp" required>
		<input class="val" type="submit" name="env-ins">
	</form>
<?php  
if(isset($_SESSION['err']))
{
	echo $_SESSION['err'];
	unset($_SESSION['err']);
}
	?>
<!-- milieu !-->