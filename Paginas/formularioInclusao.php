<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <h1>Formulário de inserção de registros na agenda</h1>

    <form action="../Forms/processaTodosFormularios.php" method="POST">

    <label for="nome">Nome: </label>
    <input type="text" name="nome" id="nome" /><br><br>

    <label for="telefone">Telefone: </label>
    <input type="tel" name="telefone" id="telefone" />

    <button type="submit" name="cadastrar">Cadastrar</button>

    </form>
    
</body>
</html>