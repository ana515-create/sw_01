<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04 </title>
</head>
<body>
<h1>Formulario</h1>
    <form action="processa04.php" method="post">
    <p>Digite seu nome: <input type="text" name="cxnome" id=""></p>
    <p>Digite seu email: <input type="text" name="cxemail" id=""></p>
    <p>Digite sua data de nascimento:<input type="date" name="cxdata" id=""></p>
    <select name="cartões" id="cartões">
  <option value="elo">elo</option>
  <option value="mastercard">mastercard</option>
  <option value="visa">visa</option>
  <option value="pagbank">pagbank</option>
</select>

    <input type="submit" value="ENVIAR">
</body>
</html>