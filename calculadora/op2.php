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
                <input type="radio" id="op1" name="op" value="sum" required>
                <label for="op1">Soma</label><br>
                <input type="radio" id="op2" name="op" value="sub">
                <label for="op2">Subtração</label><br>
                <input type="radio" id="op3" name="op" value="mult">
                <label for="op3">Multiplicação</label><br>
                <input type="radio" id="op4" name="op" value="div">
                <label for="op4">Divisão</label><br>
                <button type="submit">Calcular</button>
            </fieldset>
        </form>
    </main>
</body>
</html>