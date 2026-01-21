<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuário</title>
     <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <h1>Novo Usuário</h1>

    <form method="POST" action="{{ route('users.store') }}" class="form">
        @csrf
        <input type="text" name="name" placeholder="Nome" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="phone" placeholder="Telefone"><br><br>

        <button type="submit" class="btn-up">Salvar</button>
    </form>

    <br>
    <a href="{{ route('users.index') }}">Voltar</a>

</body>
</html>
