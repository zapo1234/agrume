<?php

class Managers
{
	
private $_db;// instance PDO

 public function _construct($db)
 {
	$this->setDb($db);
	
 }
 
 // on ecrire la requete pour enregsitrer les donnees
 
 public function add(Personnage $perso) {
	 
	$q = $this->_db->prepare('INSERT INTO tests(email,number,adresse) VALUES(:email,:number,:adresse)');
	 
	 $q->bindValue(':email', $perso->email());
	 $q->bindValue(':number', $perso->number());
	 $q->bindValue(':adresse', $perso->adresse());
	 
	 $q->execute();
	 
}
	
}

?>