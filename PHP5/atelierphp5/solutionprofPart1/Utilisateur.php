<?php

class Utilisateur
{
	protected $nom;
	protected $prenom;
	protected $age;
	
	function __construct($n,$p,$a)
	{
		$this->nom=$n;
		$this->prenom=$p;
		$this->age=$a;
	}
	
	public function getNom()
	{
		return $this->nom;
	}
	public function getPrenom()
	{
		return $this->prenom;
	}
	public function getAge()
	{
		return $this->age;
	}
	public function setNom($n)
	{
		$this->nom= $n;
	}
	public function setPrenom($p)
	{
		$this->prenom= $p;
	}
	public function setAge($a)
	{
		$this->age= $a;
	}
	
}


?>