<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Superglobais</title>
</head>
<body style="background-color: yellow;">
    <header>
        <h2>Desenvolvimento WEB</h2>
    </header>
    <main>
        <h1>Variáveis Superglobais</h1>
        <ol>
        <?php
        foreach($_SERVER as $key => $value)
            echo "<li>$key =&gt; $value</li>"
        ?>
        </ol>
    </main>
</body>
</html>