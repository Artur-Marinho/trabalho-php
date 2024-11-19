<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do Cliente</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-violet-800 p-8 w-full">
        <h2 class="text-white text-3xl">Tela do Cliente</h2>
    </div>
    <br><br>
    <form action="salvar.php" method="post" class="w-full flex items-center justify-center flex-col gap-6">
        <div>
            <h2 class="text-3xl">Agendar</h2>
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
            <button type="submit" class="bg-violet-800 text-white px-4 py-2 rounded">Agendar</button>
        </div>
    </form>
</body>
</html>