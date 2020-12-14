<?php
// On définit les 4 variables nécessaires à la connexion MySQL :
$hostname = "localhost";
$port = 3307;
$user = "root";
$password = "";
$nom_base_donnees = "soindesoi";

// NOUVELLE METHODE (depuis PHP 5.1 et avec PDO)
// depuis PHP 5.1 et a fortiori en PHP 7, on doit utiliser la classe "PDO" (PHP Data Object, un objet de connexion)
// connexion au serveur MySQL avec PDO (la forme plus récente, et plus sécurisée : NOUVELLE METHODE
try {
$connexion = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$nom_base_donnees, $user, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$connexion->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

// on fait les opérations nécessaires
$ma_requete = 'SELECT * FROM message;';

$resultat_de_ma_requete = $connexion->prepare($ma_requete);

// on exécute maintenant la requête
$resultat_de_ma_requete->execute();
// on récupère le résultat en tableau PHP
$resultat_de_ma_requete_sous_forme_de_tableau = $resultat_de_ma_requete->fetch(PDO::FETCH_ASSOC);
$nb_lignes = $resultat_de_ma_requete->rowCount();
if ($nb_lignes > 0) {
echo " select passé ";
echo $resultat_de_ma_requete_sous_forme_de_tableau['animal_name'] . " ";
}

//print_r($resultat_de_ma_requete_sous_forme_de_tableau);


} catch(Exception $e) {
echo 'Erreur : '.$e->getMessage().'<br />';
echo 'N° : '.$e->getCode();
exit();
}