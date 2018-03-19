<?php
    try{
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
    }
    catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
    }
    $requete=$bdd->prepare('INSERT INTO commande_boisson(pseudo, bbt) VALUES(?, ?)');
    $requete->execute(array($_POST['pseudo'], $_POST['bbt']));
?>