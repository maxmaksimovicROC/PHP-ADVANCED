<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="wrapper">

            <form name="invoer" action="advanced-2.php" method="POST">   
            <select name="achtergrond-kleur" id="achtergrond-kleur">
                <?php
                $kleuren = array("red", "blue", "green", "black", "brown");
                    foreach($kleuren as $optie){
                    echo "<option value=$optie>$optie</option>";};
                ?>
                            

            </select>
            <a>achtergrond kleur</a>        
             <select name="tekst-kleur" id="tekst-kleur">
                <?php
                    $kleuren = array("red", "blue", "green", "black", "brown");
                        foreach($kleuren as $optie){
                        echo "<option value=$optie>$optie</option>";};
                ?>
            </select>
            
            <a>tekst kleur</a>
<<<<<<< HEAD
            <input type="text" name="border">
            <a>border</a>
=======
            <br>

            <input type="text" name="border">
            <a>border</a>
            <br>


>>>>>>> 225c6c931afdf845736bf25ca8e077f47d913b3d
            <input type="text" name="padding">
            <a>padding</a>
            <br>

            <input type="submit" name="submit" value="vesrtuur">
        </div>
    </body>

</html>