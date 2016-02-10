<?php
include('utilisateur.php');

class admin extends utilisateur{
   
   public $login; 
   public $pwd;
  function __construct($nom, $prenom, $age,$login,$pwd) {
      parent::__construct($nom, $prenom, $age);
      $this->login=$login;
      $this->pwd=$pwd;
      
      }
      function __construct2($login,$pwd){
         $this->login=$login;
      $this->pwd=$pwd; 
          
      }
      
       
}
