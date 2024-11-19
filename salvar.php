<?php

include "conexao.php";

$nome = $_POST["nome"];
$tipo = $_POST["tipo"];
$tamanho = $_POST["tamanho"];
$data = $_POST["data"];

$sql = mysqli_query($conn, "INSERT INTO cliente (nome, tipo, tamanho, data) VALUES ('$nome', '$tipo', '$tamanho', '$data')");

if($sql){
    header("Location: painelAdmin.php");
}