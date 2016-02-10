<?php

include 'admin.php';
include 'config.php';

class AjoutAdmin 
{
	public $conn;
 	function __construct() 
	{
     	$c=new config();
     	$this->conn=$c->connexion();
 	}
    
	function AjouterAdmin($admin)
 	{
   		$Requete = "insert into utilisateur
		(nom,prenom,age,type,login,pwd)values
		(
		'".$admin->getNom()."',
		'".$admin->getPrenom()."',
		'".$admin->getAge()."',
				'admin',
		'".$admin->login."',
				'".$admin->pwd."'
		);";
		$this->conn->exec($Requete);
     
 	}
 
 	function verifPassword($pwd,$confirmpwd)
 	{	
		if($pwd==$confirmpwd) 
		{
			$success = true;
		}
 		else 
		{
            $success=false;                       
 		}
		
		return $success;
 	}
 
}
   	$login=$_POST['login'];
    $pwd=$_POST['password'];
    $confirmP=$_POST['conpassword'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
	
	$admin=new admin($nom, $prenom, $age,$login,$pwd);
    $m=new AjoutAdmin();
	
    $verifpwd=$m->verifPassword($pwd,$confirmP);
	if($verifpwd) 
	{
		$m->AjouterAdmin($admin);	
		header('location:authentification.html');
	} 
	else 
	{
		echo "Password and Confirm password not match";	
	}