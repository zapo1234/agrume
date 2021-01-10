<?php

class Personnage

{
	
 private $id;
 private $email;
 private $adresse;
 private $number;
 private $password; 
	
// ecrivons les getters et setters de notre clase

  public function id(){
	
 return $this->_id;
	
 }

  public function email(){
  return $this->_email;
	
}

 public function number() {
	 
	 return $this->_number;
	 
	 
 }
 
 public function adresse() {
	 
	 return $this->_adresse;
	 
	 
 }
 
 public function password(){
	 
	return $this->_password;
	 
 }
 
 public function setId($id) {
	$this->_id=(int)$id; 
	 
	 if($id>0) {
		 
		$this->_id =$id;
	 }
	 
 }
 
 public function setEmail($email){
	 
	$this->_email =$email; 
 }
 
 public function setAdresse($adresse){
	 
	if(is_string($adresse) AND strlen($adresse)>70) {

      $this->_adresse =$adresse;
	}		
	 
 }
 
 
 public function setPassword($password) {
	 
	$this->_password=$password; 
	 

}

public function hydrate(array $donnees) {
	
	foreach ($donnees as $key => $value)
	{
	 // on récupere le nom du setters
     $method = 'set'.ufirst($key);

    // si le setter correspondant existe
    if(method_exists($this, $method))
    {

      $this->$method($value);

    }		
		
	}
	
 }
}


?>