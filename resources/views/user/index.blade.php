<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Usuários</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8 font-sans bg-gray-50">

  <h1 class="text-3xl font-bold mb-6">Users</h1>

  <table class="table-auto w-full bg-white border border-gray-300 shadow-sm rounded-lg">
    <thead class="bg-gray-100 text-gray-700">
      <tr>
        <th class="px-6 py-3 text-left border-b">Nome</th>
        <th class="px-6 py-3 text-left border-b">E-mail</th>
        <th class="px-6 py-3 text-left border-b">Ação</th>
      </tr>
    </thead>
    <tbody class="text-gray-800">
      <tr class="hover:bg-gray-50">
        <td class="px-6 py-4 border-b">Guilherme</td>
        <td class="px-6 py-4 border-b">guilherme.anzollin@unoesc.edu.br</td>
        <td class="px-6 py-4 border-b">
          <a href="/user/1" class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
            detalhes
          </a>
        </td>
      </tr>
    </tbody>
  </table>

  <a href="/users/create" class="mt-6 inline-block px-6 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">
    Incluir usuário
  </a>

</body>
</html>
