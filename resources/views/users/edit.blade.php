<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
     <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <h1>Editar Usuário</h1>

    <form method="POST" action="{{ route('users.update', $user->id) }}" class="form">
    @csrf    
    @method('PUT')

        <input type="text" name="name" value="{{ $user->name }}" required><br><br>
        <input type="email" name="email" value="{{ $user->email }}" required><br><br>
        <input type="text" name="phone" value="{{ $user->phone }}"><br><br>

        <button type="submit" class="btn-up">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('users.index') }}">Voltar</a>

</body>
</html>
