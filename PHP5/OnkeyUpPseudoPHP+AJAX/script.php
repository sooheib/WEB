<?php
include'config.php';

class Main
{
public 	$conn;
function __construct()
{
	$c= new config();
	$this->conn=$c->connexion();
}
function searchPseudo($pseudo)
{
$request="select * from utilisateur where nom ='$pseudo' ";
$res=$this->conn->query($request);
return $res->rowCount();
}
}
$m=new Main();
$pseudo=$_GET['p'];
$row=$m->searchPseudo($pseudo);
if($row==0)
{
echo "<h1 style='color:green'>pseudo disponible</h1>";

}
else 
{
	echo "<h1 style='color:red'>pseudo existe deja</h1>";
}

?>