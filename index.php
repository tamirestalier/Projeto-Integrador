<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>WebMajordomo - CRUD</title>
    <style>
        body {
            background-color: #f2f2f2; /* Cor de fundo cinza */
            color: #333; /* Cor do texto */
            font-weight: bold; /* Negrito nas letras */
            display: flex;
            flex-direction: column;
            align-items: center; /* Centralizar verticalmente */
            height: 100vh; /* 100% da altura da viewport */
        }
        footer {
            margin-top: 20px; /* Espaço superior do rodapé */
            padding: 10px; /* Espaçamento interno do rodapé */
            background-color: #ddd; /* Cor de fundo do rodapé */
            text-align: center; /* Centralizar o texto no rodapé */
        }
    </style>
</head>
<body>
    <h1>WebMajordomo - CRUD</h1>

    <h2>Cadastrar Usuário:</h2>
    <form action="create.php" method="post">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        Idade: <input type="number" name="idade" required><br>
        <button type="submit">Cadastrar</button>
    </form>

    <h2>Lista de Usuários:</h2>
    <?php include('read.php'); ?>

    <h2>Atualizar Usuário:</h2>
    <form action="update.php" method="post">
        ID do Usuário: <input type="number" name="id" required><br>
        Novo Nome: <input type="text" name="nome" required><br>
        Novo Email: <input type="email" name="email" required><br>
        Nova Idade: <input type="number" name="idade" required><br>
        <button type="submit">Atualizar</button>
    </form>

    <h2>Excluir Usuário:</h2>
    <form action="delete.php" method="post">
        ID do Usuário: <input type="number" name="id" required><br>
        <button type="submit">Excluir</button>
    </form>

    <footer>
        Produzido por Tamires
    </footer>
</body>
</html>
