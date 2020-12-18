<?php

function insMess(){

        try {
            $objetPdo = cnx_pdo_bdd(); // appel à la fonction de connexion à la base de données
            $pdoStat = $objetPdo->prepare('INSERT INTO message VALUES (NULL, :pseudo_message, :titre_message, :date_message, :contenu_message)');
            $pdoStat->bindValue(':pseudo_message', $_POST['pseudo_message'], PDO::PARAM_STR);
            $pdoStat->bindValue(':titre_message', $_POST['titre_message'], PDO::PARAM_STR);
            $pdoStat->bindValue(':date_message', $_POST['date_message'], PDO::PARAM_STR);
            $pdoStat->bindValue(':contenu_message', $_POST['contenu_message'], PDO::PARAM_STR);
            $pdoStat->execute();

        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage() . '<br />';
            echo 'N° : ' . $e->getCode();
            exit();
        }
}