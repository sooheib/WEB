<?php

	include 'config.php';
	
	class VerifAuthAdmin
	{
		public $conn;
 		function __construct() 
		{
			$c=new config();
			$this->conn=$c->connexion();
 		}
		
		function verifAuthentification($login,$pwd,$connexion)
 		{
			$type="admin";
			$req="SELECT * FROM utilisateur WHERE login = '$login' AND pwd = '$pwd' AND type = '$type';";
			$res=$connexion->query($req); 
			$count=$res->rowCount();
				
			if($count>0) 
			{
				$success = true;
			}
			else 
			{
				$success=false;                       
			}
			//$connexion = null;
			return $success;
 		}
		
	}
	
	$login=$_POST['login1'];
	$password=$_POST['password1'];
	$verif=new VerifAuthAdmin();
	$resultatVerif=$verif->verifAuthentification($login,$password,$verif->conn);
	echo $resultatVerif;
	if($resultatVerif)
		header('location:GestionUtilisateurs.php');
	else
	{
		echo "erreur d'authentification";
		?> </br> <a href="authentification.html"> Retour page authentification </a><?php
	}

?>