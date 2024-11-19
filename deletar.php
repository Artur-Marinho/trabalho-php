<?php 
include 'conexao.php';
$id = $_GET["id_cliente"];

if(isset($_GET['id_cliente'])){
    $sqlDelete = mysqli_query($conn, "DELETE FROM cliente WHERE id_cliente = {$id}")
    or die (mysqli_error($conn));

    header('location: painelAdmin.php');
}
?>