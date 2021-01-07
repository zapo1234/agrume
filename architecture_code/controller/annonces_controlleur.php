<?php
require('session_security/inc_session.php');
require('model/model2.php');

// on insert l\'annonce dans la base de sonnées
function addAnnonce($identifiant,$titre,$message,$email) {

$line = getinserts($identifiant,$titre,$message,$email);

}

function delet($identifiant) {

$line = show($identifiant);
}

	
?>