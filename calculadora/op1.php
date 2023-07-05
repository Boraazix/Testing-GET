<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <header><h2>Calculadora</h2></header>
    <main>
        <h1>Operações</h1>
        <form action="result.php" method="get">
            <fieldset>
                <legend>Modelo 1</legend>
                <label for="n1">N1:</label>
                <input type="number" step=".01" id="n1" name="n1" required><br>
                <label for="n2">N2:</label>
                <input type="number" step=".01" id="n2" name="n2" required><br>
                <select name="op">
                    <option value="sum">Soma</option>
                    <option value="sub">Subtração</option>
                    <option value="mult">Multiplicação</option>
                    <option value="div">Divisão</option>
                </select><br>
                <button type="submit">Calcular</button>
            </fieldset>
        </form>
    </main>
</body>
</html>