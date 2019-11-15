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
?>