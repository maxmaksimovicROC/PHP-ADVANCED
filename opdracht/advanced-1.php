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
            <input type="text" name="border">
            <a>border</a>

            <input type="text" name="padding">
            <a>padding</a>
            <input type="submit" name="submit" value="vesrtuur">



        </div>
    </body>

</html>