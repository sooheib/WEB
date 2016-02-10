<?php

include"GestionUtilisateurs.php";

$id=$_GET['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
$classe=$_POST['classe'];

$e=new etudiant($nom,$prenom,$age,$classe);
$m=new GestionUtilisateurs();
$m->modifierEtudiant($id,$e);
header('location:GestionUtilisateurs.php');


?>