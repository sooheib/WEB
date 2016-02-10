<?php

include 'Admin.php';
include 'Config.php';

class AjoutAdmin
{
	 public $conn;
	 function __construct()
	 {
		 $c=new Config();
		 $this->conn=$c->connexion(); 
	 }
	 function ajout($admin)
	 {
		 $req="insert into utilisateur(nom,prenom,age,login,password) values
		 		('".$admin->getNom()."',
				'".$admin->getPrenom()."',
				'".$admin->getAge()."',
				'".$admin->login."',
				'".$admin->password."'
				);";
				$this->conn->exec($req);
	 }
}
$a=new AjoutAdmin();
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
$login=$_POST['login'];
$password=$_POST['password'];

$admin=new Admin($nom,$prenom,$age,$login,$password);
$a->ajout($admin);

echo $nom;
echo $prenom;