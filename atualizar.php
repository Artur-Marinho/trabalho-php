
<?php
      include 'conexao.php';

    if(isset($_GET['id_cliente'])){
        $id = $_GET['id_cliente'];
        $sql = mysqli_query($conn, "SELECT * FROM cliente  WHERE id_cliente = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $nome = $n['nome'];
            $tipo = $n['tipo'];
            $tamanho = $n['tamanho'];
            $data = $n['data'];
            
        }
    }

    if(isset($_POST['editar'])){
        $id = $_GET["id_cliente"];
        $nome = $_POST["nome"];
        $tipo = $_POST["tipo"];
        $tamanho = $_POST["tamanho"];
        $data = $_POST["data"];
        

        $queryUpdate = "UPDATE cliente SET nome = '$nome', tipo = '$tipo', tamanho = '$tamanho', data = 'data' WHERE id_cliente = $id";
        $consulta = mysqli_query($conn, $queryUpdate);
        header('location: painelAdmin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar - Cliente</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-violet-800 p-8 w-full">
        <h2 class="text-white text-3xl">Atualizar Cliente</h2>
    </div>
    <br><br>
    <form  method="post" class="w-full flex items-center justify-center flex-col gap-6">
        <div>
            <h2 class="text-3xl">Atualizar</h2>
        </div>
        <div>
            <input type="text" placeholder="Nome" name="nome" class="w-50 border border-1 border-black px-4 py-2">
        </div>
        <div>
            <input type="text" placeholder="Tipo (colorida ou normal)" name="tipo" class="w-50 border border-1 border-black px-4 py-2">
        </div>
        <div>
            <input type="text" placeholder="Tamanho (P, M, G)" name="tamanho" class="w-50 border border-1 border-black px-4 py-2">
        </div>
        <div>
            <input type="text" placeholder="Data 01/12" name="data" class="w-50 border border-1 border-black px-4 py-2">
        </div>
        <div>
            <button name="editar" type="submit" class="bg-violet-800 text-white px-4 py-2 rounded">Agendar</button>
        </div>
    </form>
</body>
</html>
