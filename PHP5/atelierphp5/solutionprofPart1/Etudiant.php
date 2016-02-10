<?php
include('Utilisateur.php');
class Etudiant extends Utilisateur
{
	public $classe;
	function __construc($nom,$prenom,$age,$classe)
	{
		parent:: __construct($nom,$prenom,$age);
		$this->classe=$classe;
	}
	
}

echo "Ici Classe utilisateur";  echo "<br>";

$u=new Utilisateur("SAID","Amine",30);
$u1=new Utilisateur("Esprit","Ghazela",20);
$u2=new Utilisateur("A","B",25);
echo $u->getNom(); echo "<br>";
echo $u1->getPrenom(); echo "<br>";
echo $u2->getAge(); 
echo "<br>";
echo "Ici Classe Etudiant"; echo "<br>";
$e=new Etudiant("said","amine",30,"3a3");
echo $e->getNom();
?>