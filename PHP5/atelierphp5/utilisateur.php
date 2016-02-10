<?php

class utilisateur 
{
	private $nom;
	private $prenom;
	private $age;
	
	function __construct($nom,$prenom,$age)
	{       
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->age=$age;
	}
	public function getNom() {
		return $this->nom;
	}
	public function getPrenom() {
		return $this->prenom;
	}
	public function setNom($nom) {
		$this->nom = $nom;
	}
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}
	
	function getAge()
	{
		return $this->age;
	}
	function setAge($x)
	{
		$this->age=$x;
	}
}


    


