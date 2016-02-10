<?php
class Config
{	public function connexion()
	{
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="3a3a";
		$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

		
		return $conn;
	}
	
}

?>