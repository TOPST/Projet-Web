<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Catalogue boissons</title>
</head>
<body>
    <h1>Nos boissons</h1>
    <section class="boisson">
        <h2>Bubble Tea</h2>
        <form action="bbt_post.php" method="post">
            <input type="text" name="pseudo" required="required" placeholder="pseudo"/>
            <h3>Lacté</h3>
            <input type="radio" name="bbt" id="bbt" value="Taro"/>
            <label for="bbt">Taro</label>
            <h3>Non lacté</h3>
            <input type="radio" name="bbt" id="bbt" value="Litchi"/>
            <label for="bbt">Litchi</label>
            <input type="submit" value="Commander"/>
        </form>  
       
        <!--<div class="liste_boisson">
            <form action="panier.php" method="post">
                <input type="radio" name="bbt" id="bbt" value="bbttarot"/>
                <label for="bbt">Taro</label>
            </form>    
        </div>
        <div class="liste_boisson">
            <form action="panier.php" method="post">
                <input type="radio" name="bbt" id="bbt" value="bbtlitchi"/>
                <label for="bbt">Litchi</label>
            </form>      
        </div>-->
    </section>
    <section class="boisson">
        <h2>Coffee</h2>
        
    </section>
    <section class="boisson">
        <h2>Tea</h2>
        
    </section>
    <section class="boisson">
        <h2>Milkshakes</h2>
        
    </section>
</body>
</html>