<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Studio Tatuagem</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="login.php" method="post" class="h-screen flex flex-col items-center justify-center gap-8">
        <div>
            <h2 class="text-2xl font-bold">Fazer login</h2>
        </div>
        <div>
            <input type="text" name="usuario" placeholder="Usuario (admin ou cliente)" class="w-50 border border-1 border-black px-4 py-2 rounded">
        </div>
        <div>
            <input type="text" name="senha" placeholder="Senha" class="w-50 border border-1 border-black px-4 py-2 rounded">
        </div>
        <div> <button type="submit" class="bg-violet-800 text-white font-bold px-4 py-2 rounded">Entrar</button></div>
    </form>
</body>
</html>