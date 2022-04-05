<?php
/************************************************************************************/
//Tratamento de inputs
$name = str_replace("'", "", $name);
$name = str_replace("&", "", $name);
$name = str_replace('"', "", $name);
$name = strtoupper ($name);
$name = rtrim($name);
$name = ltrim($name);

$cpf = str_replace(".", "", $cpf);
$cpf = str_replace("-", "", $cpf);
$cpf = rtrim($cpf);
$cpf = ltrim($cpf);

$telefone = str_replace(" ", "", $telefone);
$telefone = rtrim($telefone);
$telefone = ltrim($telefone);
?>

