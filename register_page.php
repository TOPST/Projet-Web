<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="register_page_post.php" method="post">
       
        Identifiant :
        <input type="text" name="username" required="required"/>
        <br/>
        
        <input type="radio" name="genre" value="Monsieur" id="Monsieur"/>
        <label for="Monsieur">Monsieur</label>
        <input type="radio" name="genre" value="Madame" id="Madame"/>
        <label for="Madame">Madame</label>
        
        Mot de passe :
        <input type="password" name="password" required="required"/>
        <br/>
        <input type="submit"/>
    </form>
</body>
</html>