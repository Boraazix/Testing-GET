<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <script src="https://kit.fontawesome.com/9578d32024.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    $users = array(
        ['id'=>7001,
        'nome'=>'José',
        'email'=>'jose@gmail.com',
        'ativo'=>true],
        ['id'=>7002,
        'nome'=>'Afonso',
        'email'=>'afonso@gmail.com',
        'ativo'=>true],
        ['id'=>7003,
        'nome'=>'Catarina',
        'email'=>'catarina@gmail.com',
        'ativo'=>true],
        ['id'=>7004,
        'nome'=>'Andréia',
        'email'=>'andreia@gmail.com',
        'ativo'=>false],
        ['id'=>7005,
        'nome'=>'Caio',
        'email'=>'caio@gmail.com',
        'ativo'=>true]
    )
    ?>
    
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ativo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $cell = '<td>%s</td>';
            $check = '<i class="fa-solid fa-check"></i>';
            $xmark = '<i class="fa-solid fa-xmark"></i>';
            foreach($users as $user)
            {
                if($user['ativo'])
                    echo '<tr>';
                else
                    echo '<tr style="background-color: lightgray;">';
                foreach($user as $column => $data)
                {
                    if($column=='ativo')
                    {
                        if($data)
                        printf($cell, $check);
                        else
                        printf($cell, $xmark);
                    }
                    else
                    {
                        printf($cell, $data);
                    }
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

</body>
</html>