<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculadora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form name = "calc" action = "../controller/ct_calculadora.php" method = "post">
        <label for = "n1">N1:</label>
        <input type = "text" id = "n1" name = "n1" required>
        <label for = "n2">N2:</label>
        <input type = "text" id = "n2" name = "n2" required>
        <p>Escolha a operação: </p><br>
        <input type = "submit" name = "somar" value = "somar">
        <input type = "submit" name = "subtrair" value = "subtrair">
        <input type = "submit" name = "multiplicar" value = "multiplicar">
        <input type = "submit" name = "dividir" value = "dividir">

    </form>
</body>
</html>