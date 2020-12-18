<?php
function req_Sel_Mess() {

    $pdoBdd = cnx_pdo_bdd(); //initialisation de la variable de connexion $pdoBdd en utilisant la fonction introduite via "require 'conn_bdd.php';"
    $pdoStat = $pdoBdd->prepare('SELECT * FROM message'); //preparation de la requete stockée dans $pdoStat
    $pdoStat->execute(); //execution de la requete
    $resultMess = $pdoStat->fetchAll(); // stockage du resultat dans la variable $race
    return $resultMess;
}