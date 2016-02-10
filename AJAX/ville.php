<?php

include'config.php';

class Main
{
	public $bdd;
	function __construct()
	{
		$c= new config();
		$this->bdd=$c->connexion();
	}
	
	function listVilles($id)
	{
		$req="select * from ville where id_pays=$id";
		$res=$this->bdd->query($req);
		return $res->fetchAll();
	}
}
$m=new Main();
$id=$_GET['id'];
$matrice=$m->listVilles($id);
foreach($matrice as $v)
{
	echo "<option>".$v['libelle_ville']."</option>";
}
?>