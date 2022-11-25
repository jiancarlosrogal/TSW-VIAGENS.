<?php
include("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];
$data_nascimento = $_POST["data_nascimento"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$endereco = $_POST["endereco"];

$sqlGravar = "INSERT INTO cliente(nome, email, telefone, senha, data_nascimento, cidade, estado, endereco)
values('$nome','$email','$telefone', '$senha', '$data_nascimento','$cidade',  '$estado', '$endereco')";
$registrar = mysqli_query($conexao,$sqlGravar);
header('Location: login.html');

?>