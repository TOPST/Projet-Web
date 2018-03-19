<?php
    // Sous MAMP (Mac)
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
    }
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    $resquest=$bdd->prepare('INSERT INTO minichat(Nickname, Message) VALUES(?, ?)');
    $resquest->execute(array($_POST['Nickname'], $_POST['Message']));
    header('Location: /web_site/comments_page.php');
?>