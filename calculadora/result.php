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
        <h1>Resultado</h1>
        <form action="" method="get">
            <fieldset>
                <?php
                $n1 = $_GET['n1'];
                $n2 = $_GET['n2'];
                $result = [];
                if(isset($_GET['op']))
                {
                    $op = $_GET['op'];
                    if($op=='sum'){
                        $result[]="$n1 + $n2 = ".($n1+$n2);
                    } else if($op=='sub') {
                        $result[]="$n1 - $n2 = ".($n1-$n2);
                    } else if($op=='mult') {
                        $result[]="$n1 * $n2 = ".($n1*$n2);
                    } else {
                        $result[]="$n1 / $n2 = ".($n1/$n2);
                    }
                }
                else
                {
                    if(isset($_GET['sum'])) {
                        $result[]="$n1 + $n2 = ".($n1+$n2);
                    }
                    if(isset($_GET['sub'])) {
                        $result[]="$n1 - $n2 = ".($n1-$n2);
                    }
                    if(isset($_GET['mult'])) {
                        $result[]="$n1 * $n2 = ".($n1*$n2);
                    }
                    if(isset($_GET['div'])) {
                        $result[]="$n1 / $n2 = ".($n1/$n2);
                    }
                }
                foreach($result as $r) {
                    echo "<p>>> $r</p>\n\t\t\t\t";
                }
                ?>
            </fieldset>
        </form>
    </main>
</body>
</html>