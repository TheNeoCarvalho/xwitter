<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-3xl font-semibold text-center text-gray-800">Bem-vindo, <?php echo $user; ?>!</h1>
        <p class="mt-4 text-center text-gray-600">Você está logado no sistema.</p>
        <div class="mt-6 text-center">
            <a href="/logout" class="bg-slate-900 text-white py-2 px-4 rounded-lg hover:bg-slate-600">Logout</a>
        </div>
    </div>

</body>
</html>
