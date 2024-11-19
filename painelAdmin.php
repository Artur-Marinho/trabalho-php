<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos cadastrados</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-violet-800 p-8 w-full">
        <h2 class="text-white text-3xl">Painel do Admin</h2>
    </div>
    <br>
    <a href="index.php">
        <button class="bg-violet-800 text-white px-4 py-2 ml-6 rounded">Sair</button>
    </a>

    <div class="w-full flex items-center justify-center flex-col gap-4">
        <div>
            <h2 class="text-3xl">Agendamentos cadastrados</h2>
        </div>
        <br> 
        <?php include "listar.php" ?>
    </div>
</body>
</html>