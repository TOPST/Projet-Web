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

    $req=$bdd->prepare('SELECT id, pass FROM user_database WHERE pseudo=:pseudo');
    $req->execute(array('pseudo'=>$_POST['username_connection']));
    $result=$req->fetch();

    $password_correct=password_verify($_POST['password_connection'],$result['pass']);

    if(!$result){
        echo 'CET UTILISATEUR EST NÉANT !';
    }
    else{
        if($password_correct){
            session_start();
            $_SESSION['id']=$result['id'];
            $_SESSION['pseudo']=$_POST['username_connection'];
            /*require ('comments_page.php');*/
            header('Location: /web_site/comments_page.php');
            exit;
            /*<meta http-equiv="refresh" content="5;URL=/repertoire/mapage.php" />*/
        }
        else{
            echo 'MOT DE PASSE MAUVAIS !';
        }
    }
    $req->closeCursor();
?>