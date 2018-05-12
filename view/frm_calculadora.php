<<!DOCTYPE html>
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
    <form name = "calc" action = "ct_calculadora.php" method = "post">
        <label for = "n1">N1:</label>
        <input type = "number" id = "n1" name = "n1">
        <label for = "n2">N2:</label>
        <input type = "number" id = "n2" name = "n2">
        <p>Escolha a operação: </p><br>
        <input type = "radio" name = "soma" value = "soma">Soma<br>
        <input type = "radio" name = "subtracao" value = "substracao">Subtração<br>
        <input type = "radio" name = "multiplicacao" value = "multiplicacao">Multiplicação<br>
        <input type = "radio" name = "divisao" value = "divisao">Divisão<br>
        <input type = "submit" value = "calcular">
    </form>
</body>
</html>