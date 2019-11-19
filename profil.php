<?php 
		if(isset($_POST['env-modif']))
		{	
			$bd=mysqli_connect("localhost","root","","moduleconnexion");
			$sql="SELECT COUNT(*) FROM utilisateurs WHERE login='".$_POST['login']."'AND id!=".$_SESSION['id']." ;";
			$envoit=mysqli_query($bd,$sql);
			mysqli_close($bd);
			$count=mysqli_fetch_row($envoit);
			$count=$count[0];
			if ($count==0) {
				
			
			if(chif($_POST['mdp'])==$_SESSION['password'])
			{	
				$bd=mysqli_connect("localhost","root","","moduleconnexion");
				
				if(isset($_POST['nouvmdp'])&&$_POST['nouvmdp']==$_POST['remdp']&&$_POST['nouvmdp']!="")
				{
					$bd=mysqli_connect("localhost","root","","moduleconnexion");
					$sql="UPDATE `utilisateurs` SET `password` = '".chif($_POST['nouvmdp'])."',`prenom` = '".$_POST['prenom']."',`nom` = '".$_POST['nom']."',`login` = '".$_POST['login']."' WHERE `utilisateurs`.`id` = ".$_SESSION['id'].";";
					$envoit=mysqli_query($bd,$sql);
					$_SESSION['password']=chif($_POST['nouvmdp']);
					$_POST['mdp']=$_POST['nouvmdp'];
					
				}
				else
				{
					if($_POST['nouvmdp']==$_POST['remdp'])
					{
						$sql="UPDATE `utilisateurs` SET `prenom` = '".$_POST['prenom']."',`nom` = '".$_POST['nom']."',`login` = '".$_POST['login']."' WHERE `utilisateurs`.`id` = ".$_SESSION['id'].";";
						$envoit=mysqli_query($bd,$sql);
					}
					else
					{
						$meserr="mots de pass diff";
					}
					
				}
				
				$bd=mysqli_connect("localhost","root","","moduleconnexion");

			$sql="SELECT login ,nom ,prenom, password, id FROM `utilisateurs` WHERE login ='".$_POST['login']."' and password ='".chif($_POST['mdp'])."' ;";
			$envoit=mysqli_query($bd,$sql);
			$reception=mysqli_fetch_all($envoit);
			mysqli_close($bd);
			

				$_SESSION['login']=$reception[0][0];
				$_SESSION['nom']=$reception[0][1];
				$_SESSION['prenom']=$reception[0][2];
				$_SESSION['password']=$reception[0][3];
				$_SESSION['id']=$reception[0][4];
			}
			else
			{
				$meserr='mdp incorecte';
			}
		}
		else{
			$meserr='ce login est deja pris !';
		}
		}
		echo "<div class=\"lien-bout ac bon\">connécté : ".$_SESSION['login']."</div> <a class=\"lien-bout ac \" href=\"index.php\">accueil</a> <form method=\"post\" action=\"index.php\"><input class=\"lien-bout ac \" type=\"submit\" name=\"destroy\" value=\"deconexion\"></form></header>";
		 ?>

	<form class="form-ins" action="index.php" method="post">
		<label>Nom :</label><input type="text" name="nom" value="<?php echo $_SESSION['nom'];?>" required>
		<label>Prenom :</label><input type="text" name="prenom" value="<?php echo $_SESSION['prenom'];?>" required>
		<label>login :</label><input type="text" name="login" value="<?php echo $_SESSION['login'];?>" required>
		<label>Nouveau mot de passe :</label><input type="password" name="nouvmdp">
		<label>Confirmer mot de passe :</label><input type="password" name="remdp">
		<label>Mot de passe :</label><input type="password" name="mdp" required>
		<label>suprimer mon compte :-( </label><input type="checkbox" name="idsup" value="<?php echo $_SESSION['id'];?>" >
		<input type="submit" name="env-modif">
	</form>	

	<?php 
	if(isset($meserr))
	{
		echo "<u>".$meserr."</u>";  
	}
	?>

<!-- milieu !-->