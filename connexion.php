<?php if (isset($_POST['env-ins'])) 
		{	
			$bd=mysqli_connect("localhost","root","","moduleconnexion");
			$sql="SELECT COUNT(*) FROM utilisateurs WHERE login='".$_POST['login']."'";
			$envoit=mysqli_query($bd,$sql);
			mysqli_close($bd);
			$count=mysqli_fetch_row($envoit);
			$count=$count[0];


			if($_POST['mdp']==$_POST['remdp']&&$count==0)
			{
				$bd=mysqli_connect("localhost","root","","moduleconnexion");
				$sql="INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES (NULL, '".$_POST['login']."', '".$_POST['prenom']."', '".$_POST['nom']."', '".chif($_POST['mdp'])."');";
				$envoit=mysqli_query($bd,$sql);
				mysqli_close($bd);
			}
			else
			{
				if($_POST['mdp']!=$_POST['remdp'])
				{
					$erreur="<b>mots de passe et confirmation de mots de passe différent</b>";
				}
				else
				{
					$erreur="<b>login deja pris essayer ".$_POST['login']."123</b> ";
				}
					echo $erreur;

				$_SESSION['err']=$erreur;
				header('Location: index.php');
			}
		}	
?>
	<form  action="index.php" method="post">
		<div id="connexion">
			<input type="text" name="login" placeholder="login">
			<input type="password" name="mdp" placeholder="Mot de passe">
		</div>
		<input type="submit" name="env-con">
	</form>
	<a class="lien-bout ac" href="index.php">acceuille</a>
	<form action="index.php" method="post">
		<input class="lien-bout" type="submit" name="dem-insc" value="Crée un compte">
	</form>
</header>
<main>
	<div>
		mais a quoi peut bien servire ce site?
	</div>	
</main>
<!-- header !--> 