<?php
$bdd = new PDO('mysql:host=mysql-gaiteur-septheure.alwaysdata.net;dbname=gaiteur-septheure_cineplousse_;charset=utf8', '192216', 'chzPMabr');


$reponse = $bdd->query('SELECT * FROM movie');
$maladie = array();
$data = $reponse->fetchAll()[0];
foreach ($data as $key => $value) {
    if (!is_numeric($key)) {
        $maladie[$key] = $value;
    } else {
//        $maladie[] = $element;
    }
}

$reponse1 = $bdd->query('SELECT pe.lastname, pe.firstname, pe.birthdate, pe.biography FROM person pe
JOIN movieHasPerson ON movieHasPerson.idPerson = pe.id  AND movieHasPerson.idMovie = 1;');
$maladie1 = array();
$data1 = $reponse1->fetchAll();
?>