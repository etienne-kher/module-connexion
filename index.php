<?php 

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>bon site sa mére</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
<?php

function chif($mdp)
{
	$mdp=hash('sha512', $mdp);
	$mdp= "pour un mots de passe".$mdp."mega solide";
	$mdp=hash('sha256', $mdp);
	return $mdp;
}

 function supr($id)
{
	$bd=mysqli_connect("localhost","root","","moduleconnexion");
	$sql="DELETE FROM `utilisateurs` WHERE `utilisateurs`.`id` = ".$id.";";
	$envoit=mysqli_query($bd,$sql);
}

if(isset($_POST['idsup']))
{	
	supr($_POST['idsup']);	
	if($_SESSION['login']!='admin')
	{
		$_POST['destroy']=true;
	}	
}


//deconexion
if (isset($_POST['destroy'])) 
{
	session_destroy();
	header('Location: index.php');
}
//modifier info
if(isset($_POST['mod'])||isset($_POST['env-modif']))
{
	include('profil.php');
}
else
{
	//inscription
		if(isset($_POST['dem-insc'])||isset($_SESSION['err']))
		{
			include 'inscription.php';
		}
	else
	{
	//connexion	
		if (isset($_POST['env-con'])) 
		{
			$bd=mysqli_connect("localhost","root","","moduleconnexion");
			$sql="SELECT login ,nom ,prenom, password, id FROM `utilisateurs` WHERE login ='".$_POST['login']."' and password ='".chif($_POST['mdp'])."' ;";
			
			$envoit=mysqli_query($bd,$sql);
			$reception=mysqli_fetch_all($envoit);
			mysqli_close($bd);
			if($reception==true)
			{
				$_SESSION['login']=$reception[0][0];
				$_SESSION['nom']=$reception[0][1];
				$_SESSION['prenom']=$reception[0][2];
				$_SESSION['password']=$reception[0][3];
				$_SESSION['id']=$reception[0][4];
			}
			else
			{
				echo "<b>une erreur c'est produite</b>";
			}
		}

		if(isset($_SESSION['login']))
		{	echo"<div class=\"lien-bout ac bon\">connécté : ".$_SESSION['login']."</div><form method=\"post\" action=\"index.php\">
							<input class=\"lien-bout\" type=\"submit\" name=\"mod\" value=\"modifier profile\">
						</form>
					<form method=\"post\" action=\"index.php\">
							<input class=\"lien-bout\" type=\"submit\" name=\"destroy\" value=\"deconexion\">
						</form>
					</header>";
			if($_SESSION['id']==1)
			{
				include('admin.php');
			}
			else{
				
				echo "	<main>
						<div>
							<p></p>
						</div>
					</main>
					";
			}
			
		}
		else
		{
			include('connexion.php');
		}
	}	
}	
?>

<footer>Copyright 2019 module de conexion | By Etienne Kher </footer>
</body>
</html>
