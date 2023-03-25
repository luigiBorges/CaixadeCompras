<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="aula">
<center>
    <div class="aulas">
<?php
  

$nome= $_POST ['nome'];
$vlprimeiroproduto = $_POST ['vlprimeiroproduto'];
$segundovl = $_POST ['segundovl'];
$vlpago = $_POST ['vlpago'];



$vltotal = $vlprimeiroproduto + $segundovl;
$troco = $vlpago - $vltotal;


echo"Cliente: $nome <br>";
echo"Valor total: $vltotal <br>"; 
echo"Troco: $troco <br>";




?>
</div>
</center>


</main>
</body>
</html>
