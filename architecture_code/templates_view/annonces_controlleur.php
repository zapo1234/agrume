<?php
require('../inc_session.php');
require('../model/model2.php');


function addAnnonce($identifiant,$titre,$message,$email) {

$line = getinsert($identifiant,$titre,$message,$email);
	
}
	
?>