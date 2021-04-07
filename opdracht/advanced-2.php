<html>
    <head>
        <title>contact</title>
        <style>
        body{
        background-color: <?php
        $achtergrond = $_POST["achtergrond"] ?? 'niks';
        if("red" == $achtergrond){
            echo "red";
        } elseif("blue" == $achtergrond){
            echo "blue";
        } elseif("green" == $achtergrond){
            echo "green";
        } elseif("black" == $achtergrond){
            echo "black";
        } elseif("brown" == $achtergrond){
            echo "brown";
        }elseif("niks" == $achtergrond){
            echo "yellow";
        } ?>;
        color: <?php
        $tekstkleur = $_POST["tekstkleur"] ?? 'niks';
        if("red" == $tekstkleur){
            echo "red";
        } elseif("blue" == $tekstkleur){
            echo "blue";
        } elseif("green" == $tekstkleur){
            echo "green";
        } elseif("black" == $tekstkleur){
            echo "black";
        } elseif("brown" == $tekstkleur){
            echo "brown";
        }elseif("niks" == $tekstkleur){
            echo "yellow";
        } ?>;
        text-align: <?php $onoff = $_POST["onoff"] ?? 'niks';
        if("on" == $onoff){
            echo "center";
        } elseif("off" == $onoff){
            echo " ";
        }elseif("niks" == $onoff){
            echo " ";
        } ?>;
        }
        table{
            border: <?php echo $_POST["tabelpx"]; ?>px solid black;
            padding-left: <?php echo $_POST["padding"]; ?>px;
        }
        </style>
    </head>
    <body>
        <h1>test</h1>
        <table id="border">
            <thead>
              <tr>
                <th>achtergrond</th>
                <th>tekstkleur</th>
                <th>center</th>
                <th>tabelpx</th>
                <th>padding</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $_POST["achtergrond"]; ?> </td>
                <td><?php echo $_POST["tekstkleur"]; ?> </td>
                <td><?php echo $_POST["onoff"]; ?> </td>
                <td><?php echo $_POST["tabelpx"]; ?> </td>
                <td><?php echo $_POST["padding"]; ?> </td>
              </tr>
            </tbody>
          </table>
    </body>
</html>