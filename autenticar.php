<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticar</title>
</head>
<body>
    <header><h2>Sistema de Gestão de Compras</h2></header>
    <main>
        <h1>Autenticação</h1>

        <?php

        if(isset($_GET['user']) && isset($_GET['password'])){
            $user = $_GET['user'];
            $password = $_GET['password'];
            echo "<p>{$user} =&gt; {$password}</p>";
        } else {
            echo '<p>Dados inválidos! Tente novamente</p>';
        }
        ?>
    </main>
    
</body>
</html>