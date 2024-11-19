<?php
    include "conexao.php";

   
    $sql = "SELECT * FROM cliente";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "
            <table>
                 <tr>
                <td class='text-center'>Id</td>
                <td class='text-center'>Nome</td>
                <td class='text-center'>Tipo</td>
                <td class='text-center'>Tamanho</td>
                <td class='text-center'>Data</td>                
                <td class='text-center'>Funções</td>                

            </tr>
        ";
        while ($a = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td class='p-4'>" . $a['id_cliente'] . "</td>
                    <td class='p-4'>" . $a['nome'] . "</td>
                    <td class='p-4'>" . $a['tipo'] . "</td>
                    <td class='p-4'>" . $a['tamanho'] . "</td>
                    <td class='p-4'>" . $a['data'] . "</td>
                    <td><a class='bg-violet-800 text-white rounded px-4 py-2' href='atualizar.php?id_cliente=".$a['id_cliente']."'>Atualizar</a><td>
                    <td><a class='bg-violet-800 text-white rounded px-4 py-2' href='deletar.php?id_cliente=".$a['id_cliente']."'>Deletar</a><td>
                </tr>
            ";
        }

        echo "</table>";
    }
?>
