<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
</head>
<body>
    <header><h2>Sistema de Formulários</h2></header>
    <main>
        <h1>Autenticação</h1>
        <form action="page2.php" method="get">
            <fieldset>
                <legend>Etapa 1/3</legend>
                <label for="n">Nome:</label>
                <input type="text" name="name" id="n" required> <br>
                <label for="a">Idade:</label>
                <select name="age" id="a">
                    <?php
                    for($i=1;$i<=100;$i++){
                        echo "<option value=\"$i\">$i</option>\n";
                    }
                    ?>
                </select><br>
                <button type="submit">Próximo</button>
            </fieldset>
        </form>
    </main>
</body>
</html>