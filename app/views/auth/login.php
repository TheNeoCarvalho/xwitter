<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Xwitter - Login</title>
</head>
<body class="bg-slate-900 flex items-center justify-center min-h-screen">
  <div class="flex flex-col  items-center justify-center bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
    <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Xwitter - Login</h2>
    <div>
      <form action="/login" method="POST">
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Username</label>
          <input placeholder="Informe seu username" type="text" id="username" name="username" required
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-6">
          <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
          <input placeholder="Informe sua senha" type="password" id="password" name="password" required
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <span class="flex items-center justify-center block text-sm font-medium text-gray-700 m-4">Ainda não possui conta? <a class="font-bold mx-2" href="/register">Criar conta</a></span>
        <input type="submit" value="Entrar"
        class="w-full bg-slate-900 text-white font-semibold py-2 px-4 rounded-md hover:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
      </div>
    </form>
        <?php session_start(); ?>
        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 my-4 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">Erro: </strong>
                <span class="block sm:inline"><?php echo $_SESSION['error_message']; ?></span>
            </div>
            <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>
  </div>
</body>
</html>
