<?php 
	session_start();


if(isset($_SESSION['login']))
{
	$r='red';
}
else{
	$r='pink';
}
var_dump($_SESSION['login']);
header('content-type: text/css'); 
?>

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
	background-color: <?php echo $r;?>;  /*#1AEB77*/;
}
header{
	background-color: #3CB826;
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	align-items: center;
	height: 80px;
	width: 100%;
	padding-top:1%;
	padding-bottom:1%;

}
.lien-bout{
	border:none;
	height: 80px;
	width: 110px;
    background-color: #991AEB;
    color: white;
    text-align: center;
    box-shadow: 3px 3px 6px darkgrey;
    animation: rotation 0.7s 1;
    transition: transform 1s;
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
}
.bon{
	background-color: #B459C1;
}

.val{
	border:none;
    background-color: #991AEB;
    color: white;
    text-align: center;
    box-shadow: 3px 3px 6px darkgrey;
    animation: rotation 0.7s 1;
    transition: transform 1s;
}
b{
	position: absolute;
    top: 45px;
    left: 220px;
}
#connexion{
	display: flex;
	flex-direction: column;
}
main{
	display: flex;
	flex-direction: column;
	align-items: center;
}
.form-ins{

	display: flex;
	flex-direction: column;
	align-items: center;
	animation: rotation 0.7s 1;

}
footer{
	padding-top:2%;
	padding-bottom: 2%; 
	text-align: center;
	position: absolute; 
	bottom: 0;
	width: 100%;
	background-color: #3CB826;
}

#jeu-div
{
	background-color: red;
    width: 800px;
    height: 350px;
}
@keyframes game {
  0%   {top: 0px; left: 0px;}
  25%  {top: 200px;left: 200px;}
  75%  {top: 50px;left: 500px;}
  100% {top: 100px;left: 700px;}
}

#jeu
{	position: relative;
	color: rgba(0, 0, 0, 0);
	width:100px;
	height: 100px;
	background-image: url('https://www.ifop.com/wp-content/uploads/2019/10/kebabb.jpg');
	background-size: 100% 100%;
	animation: game 10s infinite alternate;

}
