<?php 
	session_start();

function topbot()
	{
		$top=random_int(0, 250);
		$bot=random_int(0, 700);
		
		echo "top: ".$top."px; left: ".$bot."px;";
	}

$disp="block;";
$dispwin ="none;";
if(isset($_SESSION['game'])){
$niveau=$_SESSION['game'];
$seconde=9-$niveau;
if($niveau==9)
{
	$seconde=0.8;
}
if($niveau==10)
{
	$seconde=0.7;
}
if($niveau>10)
{	$dispwin ="flex;";
	$disp="none;";
}
}
header('content-type: text/css'); 


?>
@import url('https://fonts.googleapis.com/css?family=Calligraffitti|Faster+One&display=swap');

@keyframes rotation {
  from {transform: rotate3d(1, 1, 1, -120deg);}
  to {transform: rotate3d(1, 1, 1, 0deg);}
}

body{
	margin: 0;
	height: 100%;
	display: flex;
	flex-direction: column;
	align-items: center;
	background-color: #dcb48e;
}
header{
	background-color: #dc1d1d;
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	align-items: center;
	height: 80px;
	width: 100%;
	padding-top:1%;
	padding-bottom:1%;
	border-bottom: 3px solid #fed500;

}
.lien-bout{
	border:none;
	height: 70px;
	width: 110px;
    background-color: #fed500;
    color: white;
    text-align: center;
    box-shadow: 3px 3px 6px black;
    animation: rotation 0.7s 1;
    transition: transform 1s;
    font-family: 'Faster One', cursive;
    text-shadow: 1px 1px 1px black;
    border-radius: 15%;
}

.lien-bout:hover{
	transform: rotate(-5deg) scale(1.05);
	
}

.ac{
	text-decoration: none;
	display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-family: 'Faster One', cursive;
}
.bon{
	background-color: #8ea709;
}

.val{
	margin-top:1%;
	border:none;
    background-color: #8ea709;
    color: white;
    text-align: center;
    box-shadow: 3px 3px 6px black;
    animation: rotation 0.7s 1;
    transition: transform 1s;
    font-family: 'Faster One', cursive;
    text-shadow: 1px 1px 1px black;
    height: 25px;
}
b{	
	color: #fed500;
	text-shadow: 1px 1px 1px black;
	font-family: 'Calligraffitti', cursive;
	position: absolute;
    top: 10%;
    left: 30%;
}
#connexion{
	display: flex;
	flex-direction: column;
	height: 60px;
	justify-content: space-around;
}
main{
	display: flex;
	flex-direction: column;
	align-items: center;
	margin-bottom: 4%;
}
p{
	font-family: 'Faster One', cursive;
	color: #fed500;
	text-shadow: 1px 1px 1px black;
	font-size: 120%;

}
.form-ins{
	background-color: #dc1d1d;
	display: flex;
	flex-direction: column;
	align-items: center;
	animation: rotation 0.7s 1;
	border: 3px solid #fed500;
	border-radius: 10px;
	box-shadow: 4px 4px 10px black;
	padding: 50px;
    margin-top: 100px;
    margin-bottom: 100px;
    font-size: 20px;
    color: #fed500;
	text-shadow: 1px 1px 1px black;
	font-family: 'Calligraffitti', cursive;

}

.inp-form
{
	font-size: 20px;
	margin:6%;
}
u{
	color:red;
	margin-bottom: 50px;
}
footer{
	margin-top:2%;
	padding-top:2%;
	padding-bottom: 2%; 
	text-align: center;
	width: 100%;
	background-color: #dc1d1d;
	color: #fed500;
	font-family: 'Faster One', cursive;
	text-shadow: 1px 1px 1px black;
	border-top: 3px solid #fed500;
}

#jeu-div
{
	background-image: url('image/<?php if(isset($_SESSION['game'])) {echo $_SESSION['game'] ;}?>.jpg');
    background-position: center;
	background-repeat: no-repeat;
	background-size: 100%;
    width: 800px;
    height: 350px;
    display: <?php echo $disp ;?>
    border: 3px solid #fed500;
	border-radius: 10px;
	box-shadow: 4px 4px 10px black;

}
@keyframes game {
  0%   {<?php topbot();  ?>}
  25%  {<?php topbot();  ?>}
  50%  {<?php topbot();  ?>}
  75%  {<?php topbot();  ?>}
  100% {<?php topbot();  ?>}
}

#div-win
{	color: #fed500;
	text-shadow: 1px 1px 1px black;
	font-family: 'Calligraffitti', cursive;
	display:flex;
	flex-direction :column;
	align-items:center;	
	display: <?php echo $dispwin ;?>;
	font-size: 160%;
}
.img
{
	border: 3px solid #fed500;
	border-radius: 10px;
	box-shadow: 4px 4px 10px black;
}
#jeu
{	position: relative;
	color: rgba(0, 0, 0, 0);
	width:100px;
	height: 100px;
	background-image: url('image/<?php if(isset($_SESSION['game'])) { echo $_SESSION['game'] ;}?>.jpg');
	background-size: 100% 100%;
	animation: game <?php if(isset($_SESSION['game'])) {echo $seconde;}?>s infinite alternate;
	border: none;
	border-radius: 90px;
	border: 3px solid #fed500;
	box-shadow: 2px 2px 10px black;

}
table
{	background-color: #dc1d1d;
	color: #fed500;
	text-shadow: 1px 1px 1px black;
	padding:2%;
	margin-top: 100px;
    margin-bottom: 100px;
	border: 3px solid #fed500;
	border-radius: 10px;
	box-shadow: 4px 4px 10px black;
}