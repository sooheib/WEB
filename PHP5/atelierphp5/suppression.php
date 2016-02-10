<?php
include 'GestionUtilisateurs.php';
$m=new GestionUtilisateurs();
$id=$_POST['choix'];
$m->supprimerEtudiant($id);
header('location:GestionUtilisateurs.php');
?>