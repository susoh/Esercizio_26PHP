<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="risultati.php" method="get">
        nome<br>
        <input type="text" name="name">
        <br>cognome<br>
        <input type="text" name="surname">
        <br>data di nascita<br>
        <input type="date" name="date">
        <br>orario di ritorno a casa massimo<br>
        <input type="time" name="time">
        <br>mezzo per raggiungere la scuola<br>
        <input type="radio" name="op1" value="piedi" checked>piedi
        <input type="radio" name="op1" value="mezzi pubblici">mezzi pubblici
        <input type="radio" name="op1" value="auto">auto
        <br>corsi facoltativi<br>
        <input type="checkbox" name="corso1" value="corso di inglese">corso di inglese
        <input type="checkbox" name="corso2" value="corso di teatro">corso di teatro
        <input type="checkbox" name="corso3" value="attivita sportive">attivita sportive<br>
        <input type="submit">
    </form>
</body>
</html>