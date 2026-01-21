<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

    <h1>Lista de Usuários</h1>

    <a href="{{ route('users.create') }}">Cadastrar novo usuário</a>

        <table border="1" cellpadding="8">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}">Editar</a>

                            <button class="btn-delete" data-id="{{ $user->id }}">
                                Excluir
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
     
    <script src="/js/user.js"></script>
</body>
</html>
