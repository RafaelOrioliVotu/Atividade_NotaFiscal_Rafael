<?php

$item = $_POST['item'];
$cod = $_POST['cod'];
$quant = $_POST['quant'];
$desc = $_POST['desc'];
$valu = $_POST['valu'];
$valt;

$valt = $valu * $quant;

$linha = date('d/m/Y H:i:s') . " | " . $item . " | " . $cod . " | " . $quant . " | " . $desc . " | " . $valu . " | " . $valt . PHP_EOL;

file_put_contents('CadastroItem.txt', $linha, FILE_APPEND);

header('location: ../_HTML/CadastroItem.html')

?>