<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
                body {
                    background-color: <?php echo $_POST["achtergrond-kleur"] ?> ;
                    color: <?php echo $_POST["tekst-kleur"] ?>;
                }
                table,tr,td {
                    padding: <?php echo $_POST["padding"] ?>px;
                    border: <?php echo $_POST["border"] ?>px solid black;
                }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="flex-container">
                <table>
                    <tr>
                        <th>key</th>
                        <th>value</th>
                    </tr>

                    <?php
                        $info2= array("naam"=>"naam", "achternaam"=>"achternaam", "klas"=>"klas", "muziek"=>"favorite music");
                        $info= array("naam"=>"Max", "achternaam"=>"Maksimovic", "klas"=>"0D", "muziek"=>"R&B");
                        

                        function maakrij($info2){

                                return $info2;
                        }
                            foreach($info2 as $index => $thing){

                                echo "<tr><td> $thing </td><td> $info[$index] </td></tr>";
                            }

                    ?>
                    
                </table>
            </div>
        </div>
    </body>
</html>