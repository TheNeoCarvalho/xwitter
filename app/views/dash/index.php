<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed - Xwitter</title>
    <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="bg-slate-900 flex items-center justify-center min-h-screen text-white">

    <!-- Container Principal -->
    <div class="min-h-screen flex max-w-7xl mx-auto">

        <!-- Coluna de Navegação Esquerda (Menu Lateral) -->
        <div class="w-1/4 p-4 hidden md:block">
            <nav class="space-y-4">
                <a href="/" class="flex items-center space-x-2 text-xl text-gray-200 font-bold hover:bg-gray-600 p-2 rounded-md">
                    <span class="material-icons">home</span>
                    <span>Home</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-xl text-gray-200 font-bold hover:bg-gray-600 p-2 rounded-md">
                    <span class="material-icons">search</span>
                    <span>Explorar</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-xl text-gray-200 font-bold hover:bg-gray-600 p-2 rounded-md">
                    <span class="material-icons">notifications</span>
                    <span>Notificações</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-xl text-gray-200 font-bold hover:bg-gray-600 p-2 rounded-md">
                    <span class="material-icons">person</span>
                    <span>Perfil</span>
                </a>
            </nav>
        </div>

        <!-- Coluna Principal (Feed) -->
        <div class="w-full md:w-1/2 p-4 border-x">
            <!-- Cabeçalho do Feed -->
            <div class="border-b p-4 mb-4">
                <h2 class="text-xl font-bold">Página Inicial</h2>
            </div>

            <!-- Campo de Criação de Novo Tweet -->
            <div class="flex space-x-4 p-4 border-b">
                <img src="/images/avatar.png" class="w-12 h-12 rounded-full" alt="User Avatar">
                <div class="flex-1">
                    <textarea rows="3" class="w-full border border-gray-300 text-black rounded-lg p-2 focus:outline-none" placeholder="O que está acontecendo?"></textarea>
                    <div class="text-right mt-2">
                        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-600">
                            Tweetar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Exemplo de Post no Feed -->
            <div class="p-4 border-b">
                <div class="flex items-start space-x-4">
                    <img src="/images/avatar.png" class="w-12 h-12 rounded-full" alt="User Avatar">
                    <div>
                        <div class="flex items-center space-x-2">
                            <span class="font-bold">John Doe</span>
                            <span class="text-sm text-gray-500">@johndoe</span>
                            <span class="text-sm text-gray-500">· 2h</span>
                        </div>
                        <p class="text-white-800">Este é um exemplo de post no feed de Xwitter. É aqui que as atualizações e pensamentos rápidos são postados.</p>
                        <div class="flex space-x-8 mt-2 text-gray-500">
                            <button class="flex items-center space-x-1 hover:text-blue-500">
                                <span class="material-icons">chat_bubble_outline</span>
                                <span>12</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-green-500">
                                <span class="material-icons">repeat</span>
                                <span>8</span>
                            </button>
                            <button class="flex items-center space-x-1 hover:text-red-500">
                                <span class="material-icons">favorite_border</span>
                                <span>34</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repetir a estrutura acima para mais posts -->

        </div>

        <!-- Coluna Direita (Sugestões, Trends, etc.) -->
        <div class="w-1/4 p-4 hidden lg:block">
            <div class="bg-slate-900 p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-bold">Quem seguir</h3>
                <div class="space-y-4 mt-4">
                    <div class="flex items-center space-x-4">
                        <img src="/images/avatar.png" class="w-12 h-12 rounded-full" alt="User Avatar">
                        <div>
                            <p class="font-bold">Jane Doe</p>
                            <p class="text-sm text-gray-500">@janedoe</p>
                            <button class="mt-1 text-sm text-blue-500">Seguir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
