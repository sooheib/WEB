<?php
class config
{
	public function connexion()
	{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="atelier2cinfo";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
		return $conn;
	}
}


?>