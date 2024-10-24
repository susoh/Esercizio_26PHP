<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_GET["name"];
        $cognome = $_GET["surname"];
        $data = $_GET["date"];
        $orario = $_GET["time"];
        $mezzo = $_GET["op1"];
        $corsi = [];
        if (isset($_GET["corso1"])) {
            array_push($corsi, $_GET["corso1"]);
        } 
        if (isset($_GET["corso2"])) {
            array_push($corsi, $_GET["corso2"]);
        } 
        if (isset($_GET["corso3"])) {
            array_push($corsi, $_GET["corso3"]);
        } 
        
    ?>
    <table style="border: 1px solid black;">
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Data di nascita</th>
            <th>Orario</th>
            <th>Mezzo di Trasporto</th>
            <th>Corsi</th>
        </tr>
        <tr>
            <?php
                echo "<td>$nome</td><td>$cognome</td><td>$data</td><td>$orario</td><td>$mezzo</td><td>";
                foreach ($corsi as $key => $value) {
                    echo"$value , ";
                }
            ?>
            </td>
        </tr>
    </table>
</body>
</html>