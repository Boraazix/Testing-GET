<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
</head>
<body>
    <header><h2>Sistema de Gestão de Compras</h2></header>
    <main>
        <h1>Autenticação</h1>
        <form action="autenticar.php" method="get">
            <fieldset>
                <legend>Dados de Autenticação</legend>
                <label for="u">Usuário:</label>
                <input type="text" name="user" id="u"> <br>
                <label for="p">Senha:</label>
                <input type="password" name="password" id="p"> <br>
                <button type="submit">Autenticar</button>
            </fieldset>
        </form>
    </main>
</body>
</html>