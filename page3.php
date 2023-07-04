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
        <form action="page4.php" method="get">
            <fieldset>
                <?php
                foreach($_GET as $key => $value){
                    echo "<input type=\"hidden\" name=\"$key\" value=\"$value\">\n";
                }
                ?>
                <legend>Etapa 3/3</legend>
                <label>Oque tem na sua casa:</label> <br>
                <input type="checkbox" name="geladeira" id="c1">
                <label for="c1">Geladeira</label> <br>
                <input type="checkbox" name="fogaoagas" id="c2">
                <label for="c2">Fogão a gás</label> <br>
                <input type="checkbox" name="chuveiroeletrico" id="c3">
                <label for="c3">Chuveiro elétrico</label> <br>
                <button type="submit">Próximo</button>
            </fieldset>
        </form>
    </main>
</body>
</html>