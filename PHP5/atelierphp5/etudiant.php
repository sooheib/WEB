<?php
include('utilisateur.php');
class etudiant extends utilisateur
{
	public $classe;
	function __construct($nom,$prenom,$age,$classe)
	{
	parent:: __construct($nom,$prenom,$age);
	$this->classe=$classe;
	}
	
}

?>