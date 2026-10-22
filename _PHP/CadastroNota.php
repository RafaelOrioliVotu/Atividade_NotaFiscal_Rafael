<?php
$num = $_POST['num'];
$date = $_POST['date'];
$cfop = $_POST['cfop'];
$metodo = $_POST['metodo'];
$forma = $_POST['forma'];
$banco = $_POST['banco'];
$icms = $_POST['icms'];
$ipi = $_POST['ipi'];
$cpf = $_POST['cpf'];

$linha = date('d/m/Y H:i:s') . " | " . $num . " | " . $date . " | " . $cfop . " | " . $metodo . " | " . $forma . " | " . $banco . " | " . $icms . " | " . $ipi . " | " . $cpf . PHP_EOL;

file_put_contents('CadastroNota.txt', $linha, FILE_APPEND);

header('location: ../_HTML/CadastroItem.html')

?>