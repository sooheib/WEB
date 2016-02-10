<?php
include 'config.php';
include 'etudiant.php';

class GestionUtilisateurs 
{
	 public $conn;
	 function __construct() 
	 {
		 $c=new config();
		 $this->conn=$c->connexion();
	 }
	 function affichage ()
	 {
		$requete='select *from utilisateur where type="etudiant"';
	 	$reponse=$this->conn->query($requete);
		return $reponse->fetchAll(); 
	 }	
	 function ajouterEtudiant($etudiant)
	 {
	   $Requete = "insert into utilisateur
		(nom,prenom,age,type,classe)values
		(
		'".$etudiant->getNom()."',
		'".$etudiant->getPrenom()."',
		'".$etudiant->getAge()."',
				'etudiant',
		'".$etudiant->classe."'		
		)";
			$this->conn->exec($Requete);
	 }
	
	 function supprimerEtudiant($id){
		 
		 $Requete = "delete from utilisateur where id = '$id'";
			$this->conn->exec($Requete);
	 }
	 function modifierEtudiant($id,$e)
	 {
	   $Requete = "update utilisateur set 
			nom = '".$e->getNom().
			"',prenom = '".$e->getPrenom().
			"',age ='".$e->getAge().
			"',classe = '".$e->classe.
			"' where id = '$id'";
			
			$this->conn->exec($Requete);
		 
	 }
	 
}

$m=new GestionUtilisateurs();
//$m->ajouterEtudiant($e1);
//$m->supprimerEtudiant(4);
//$m->modifierEtudiant(1, $e1);

	$tab=$m->affichage();?>
	<form method="post" action="suppression.php">
    <?php
	echo '<h1>La liste des étudiants</h1>';
	echo "<table border=1>";
	echo "<tr>
			<th>nom</th>
			<th>prenom</th>
			<th>age</th>
			<th>classe</th>
			<th>Suppression</th>
			<th>Modification</th>
		</tr>";
			foreach($tab as $e1)
			{
				echo "<tr>";
					echo "<td>".$e1['nom']."</td>";
					echo "<td>".$e1['prenom']."</td>";
					echo "<td>".$e1['age']."</td>";
					echo "<td>".$e1['classe']."</td>";?>
					<td> <input type="radio" name="choix" id="choix" value="<?php echo $e1['id'];?>" />
                     <td><a href="modifier.php?id=<?php echo $e1['id'];?>">modifier</a></td>
					<?php 
				echo "</tr>";		
			}
			echo "</table>";
		?>
        <input type="submit" value="Supprimer" />
		</form> 
		<?php


