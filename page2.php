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
        <form action="page3.php" method="get">
            <fieldset>
                <?php
                foreach($_GET as $key => $value){
                    echo "<input type=\"hidden\" name=\"$key\" value=\"$value\">\n";
                }
                ?>
                <legend>Etapa 2/3</legend>
                <label>Faixa Salarial:</label> <br>
                <input type="radio" name="salary" id="r1" value="<1" required>
                <label for="r1">Até 1 salário mínimo</label> <br>
                <input type="radio" name="salary" id="r2" value="1-5">
                <label for="r2">1 até 5 salários mínimos</label> <br>
                <input type="radio" name="salary" id="r3" value=">5">
                <label for="r3">Maior que 5 salários mínimos</label> <br>
                <button type="submit">Próximo</button>
            </fieldset>
        </form>
    </main>
</body>
</html>