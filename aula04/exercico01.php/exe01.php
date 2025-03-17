<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>- Formulario</title>
</head>
<body>
<form action="processa01.php" method get>
        <p> Digite seu nome: <input type="text" name="cxnome" id=""></p>

        <P>Digite sua nota 1: <input type="number"  name="nota1" min="0" max="10" required></p>
        <P>Digite sua nota 2: <input type="number"  name="nota2" min="0" max="10" required></p>
        <P>Digite sua nota 3: <input type="number"  name="nota3" min="0" max="10" required></p>


        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>