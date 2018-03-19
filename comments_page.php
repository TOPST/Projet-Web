<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>PAGE DE COMMENTAIRES</h1>
        <?php 
            if(isset($_SESSION['pseudo'])){
                echo 'Bonjour '.$_SESSION['pseudo'];
            }
            else{
                echo '<p>Bonjour, vous n\'êtes pas connecté !</p>';
            }
        ?>
    <a href="deconnection_page.php">Déconnexion</a>
    
    <h2>Commentaires</h2>
        <?php
    // Sous MAMP (Mac) : connection à la base de données.
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
    }
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    //Récupération de toutes les informations dans la base de donées.
    $answer=$bdd->query('SELECT Nickname, Message, DATE_FORMAT(DateTime, \'%d/%m/%Y à %H:%i:%s\') AS date_fr FROM minichat ORDER BY ID DESC LIMIT 0, 10');
    //Affichage une à une des différentes informations recueillies.
    while($donnees=$answer->fetch()){
        echo "<p>[" .htmlspecialchars($donnees['date_fr']). "] <b>" .htmlspecialchars($donnees['Nickname']). "</b> : " .nl2br(htmlspecialchars($donnees['Message'])). "</p>";
    }
    $answer->closeCursor();
    ?>
        
        
    <form action="comments_page_post.php" method="post">
        <p>Pseudo :</p>
        <input type="text" name="Nickname" required/> <br/>
        <p>Commentaire :</p>
        <textarea name="Message" cols="30" rows="10"></textarea>
        <input type="submit" value="Envoyer"/>
    </form>
    
    
</body>
</html>