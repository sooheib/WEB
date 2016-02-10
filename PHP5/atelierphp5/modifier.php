<?php
include 'config.php';

$id=$_GET['id'];
$c=new config();
$conn=$c->connexion();
$req="select * from utilisateur where id='$id';";
$exec=$conn->query($req);
$res=$exec->fetchAll();
foreach($res as $t)
{
?>
  <form method="post"  action="update.php?id=<?php echo $id;?>">
                	<fieldset>
                    <legend> Inscription </legend>
                    <table>
                        	<tr>
                            <td><label> Nom  </label></td>
                        	<td><input type="text"  maxlength="30" required name="nom" value="<?php echo $t['nom'];?>" /></td>
                    		</tr>
                    	
                        	<tr>
                            <td><label>Prénom  </label></td>
                        	<td><input type="text"  maxlength="30" required name="prenom" value="<?php echo $t['prenom'];?>"/></td>
                    		</tr>
                    	
                        	<tr>
                            <td><label>Age  </label></td>
                        	<td><input type="text"  maxlength="30" required name="age" value="<?php echo $t['age'];?>" /></td>
                    		</tr>
                            
                            <tr>
                            <td><label>Classe  </label></td>
                        	<td><input type="text" maxlength="30" required name="classe" value="<?php echo $t['classe'];?>"/></td>
                    		</tr>
                    	
                        	<tr>
                            <td><input type="submit" name="register" value="Register" /></td>
                    		</tr>
                </table>
                </fieldset>
            	</form>
<?php } ?>