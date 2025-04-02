<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar usuário</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8 font-sans bg-gray-50">
    <h1 class="text-3xl font-bold mb-6">
        Criar usuário
    </h1>

    <!-- Formulário de edição -->
    <form action="/users/store" method="POST" class="inline">
        @csrf

        <!-- Campos -->
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <label for="name" class="block text-sm font-medium text-gray-900">Nome</label>
                <div class="mt-2">
                    <input type="text" name="name" class="block w-full rounded-md border border-gray-300 py-1.5 pl-3 text-base text-gray-900 shadow-sm placeholder:text-gray-400 focus:outline-none sm:text-sm">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="email" class="block text-sm font-medium text-gray-900">E-mail</label>
                <div class="mt-2">
                    <input type="text" name="email" class="block w-full rounded-md border border-gray-300 py-1.5 pl-3 text-base text-gray-900 shadow-sm placeholder:text-gray-400 focus:outline-none sm:text-sm">
                </div>
            </div>
        </div>

        <!-- Botões lado a lado -->
        <div class="mt-6 flex flex-wrap items-center gap-4">
            <button type="submit" class="px-6 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">
                Salvar
            </button>
    </form>

    <a href="/users" class="px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition flex items-center justify-center">
        Voltar
    </a>
    </div>

</body>
</html>
