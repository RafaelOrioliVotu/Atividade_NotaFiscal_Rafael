<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$cep = $_POST['cep'];
$end = $_POST['end'];
$cid = $_POST['cid'];
$cpf = $_POST['cpf'];

$linha = date('d/m/Y H:i:s') . " | " . $name . " | " . $tel . " | " . $cep . " | " . $end . " | " . $cid . " | " . $cpf . PHP_EOL;

file_put_contents('CadastroCliente.txt', $linha, FILE_APPEND);

header('location: ../_HTML/CadastroNota.html')

?>