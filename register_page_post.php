<?php
    function databaseConnection(){
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
            return $bdd;
        }
        catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
    $bdd=databaseConnection();
    $pseudo=$_POST['username'];
    $genre=$_POST['genre'];
    $pass_hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $req=$bdd->prepare('INSERT INTO user_database(pseudo, pass, genre) VALUES(:pseudo, :pass, :genre)');
    $req->execute(array('pseudo'=>$pseudo, 'pass'=>$pass_hash, 'genre'=>$genre));
?>