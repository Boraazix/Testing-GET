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
        <h1>Confira as respostas</h1>
        <ul>
        <?php
            if(isset($_GET['name']) && isset($_GET['age'])){
                echo "<li>Nome: {$_GET['name']}</li>\n";
                echo "<li>Idade: {$_GET['age']} ano(s)</li>\n";
            }
            if(isset($_GET['salary'])){
                $salary=$_GET['salary'];
                $string="<li>Salário: ";
                if($salary=="<1")
                    $string.="Até 1 salário mínimo";
                else if($salary=="1-5")
                    $string.="1 até 5 salários mínimos";
                else
                    $string.="Maior que 5 salários mínimos";
                echo $string . "</li>\n";
            }
            if(isset($_GET['geladeira'])){
                echo "<li>Possui geladeira</li>";
            }
            if(isset($_GET['fogaoagas'])){
                echo "<li>Possui fogão a gás</li>";
            }
            if(isset($_GET['chuveiroeletrico'])){
                echo "<li>Possui chuveiro elétrico</li>";
            }
        ?>
        </ul>
    </main>
</body>
</html>