<?php
include('Utilisateur.php');
class Admin extends Utilisateur
{
	public $login;
	public $password;
	function __construc($nom,$prenom,$age,$login,$password)
	{
		parent:: __construct($nom,$prenom,$age);
		$this->login=$login;
		$this->password=$password;
	}
	
}