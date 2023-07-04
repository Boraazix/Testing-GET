<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9578d32024.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h2>Sistema de GET</h2>
    </header>
    <main>
        <h1>Lista</h1>
        <?php
        $ufs = [
            'AC' => [
                'https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg',
                'Acre',
                'AC',
                'Rio Branco',
                '164122,2',
                '795145',
                '4,30',
                '13622000',
                '0,2',
                '16953,46',
                '0,663',
                '86,9%',
                '17,0&permil;',
                '73,9 anos'
            ],
            'AL' => [
                'https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg',
                'Alagoas',
                'AL',
                'Maceió',
                '27767,7',
                '3327551',
                '108,61',
                '46364000',
                '0,8',
                '13877,53',
                '0,631',
                '80,6%',
                '19,5&permil;',
                '71,6 anos'
            ],
            'AP' => [
                'https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg',
                'Amapá',
                'AP',
                'Macapá',
                '142814,6',
                '756500',
                '4,16',
                '13861000',
                '0,2',
                '18079,54',
                '0,708',
                '95%',
                '23,2&permil;',
                '73,9 anos'
            ],
            'AM' => [
                'https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg',
                'Amazonas',
                'AM',
                'Manaus',
                '1570745,7',
                '3893763',
                '2,05',
                '86560000',
                '1,4',
                '21978,95',
                '0,674',
                '93,1%',
                '18,2&permil;',
                '71,9 anos'
            ],
            'BA' => [
                'https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg',
                'Bahia',
                'BA',
                'Salvador',
                '564692,7',
                '15150143',
                '24,46',
                '245025000',
                '4,1',
                '16115,89',
                '0,66',
                '87%',
                '17,3&permil;',
                '73,5 anos'
            ],
            'CE' => [
                'https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg',
                'Ceará',
                'CE',
                'Fortaleza',
                '148825,6',
                '8867448',
                '54,40',
                '130621000',
                '2,2',
                '14669,14',
                '0,682',
                '84,8%',
                '14,4&permil;',
                '73,8 anos'
            ],
            'DF' => [
                'https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg',
                'Distrito Federal',
                'DF',
                'Brasília',
                '5760,0',
                '3055149',
                '5262,08',
                '206692000',
                '3,8',
                '71620,95',
                '0,824',
                '88,6%',
                '6,4&permil;',
                '78,8 anos'
            ],
            'ES' => [
                'https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg',
                'Espírito Santo',
                'ES',
                'Vitória',
                '46095,6',
                '4064052',
                '87,78',
                '159644000',
                '2,6',
                '15683,08',
                '0,698',
                '88,7%',
                '20,1&permil;',
                '76,4 anos'
            ],
            'GO' => [
                'https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg',
                'Goiás',
                'GO',
                'Goiânia',
                '341289,7',
                '7018354',
                '20,60',
                '201438000',
                '3,3',
                '14968,34',
                '0,734',
                '90,4%',
                '16,7&permil;',
                '74,4 anos'
            ],
            'MA' => [
                'https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg',
                'Maranhão',
                'MA',
                'São Luís',
                '331937,4',
                '7114598',
                '21,44',
                '172365000',
                '2,9',
                '14470,74',
                '0,644',
                '83,6%',
                '23,8&permil;',
                '70,9 anos'
            ],
            'MT' => [
                'https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg',
                'Mato Grosso',
                'MT',
                'Cuiabá',
                '903366,2',
                '3526220',
                '3,90',
                '139262000',
                '1,9',
                '22398,27',
                '0,717',
                '91,4%',
                '11,4&permil;',
                '74,1 anos'
            ],
            'MS' => [
                'https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg',
                'Mato Grosso do Sul',
                'MS',
                'Campo Grande',
                '357145,6',
                '2810722',
                '7,92',
                '119478000',
                '1,8',
                '16037,18',
                '0,757',
                '91,7%',
                '13,9&permil;',
                '74,8 anos'
            ],
            'MG' => [
                'https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg',
                'Minas Gerais',
                'MG',
                'Belo Horizonte',
                '586522,1',
                '21168791',
                '35,92',
                '675668000',
                '11,2',
                '14753,84',
                '0,731',
                '89,4%',
                '15,7&permil;',
                '78,6 anos'
            ],
            'PA' => [
                'https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg',
                'Pará',
                'PA',
                'Belém',
                '1247954,7',
                '8690745',
                '6,95',
                '240550000',
                '4,0',
                '26649,98',
                '0,667',
                '91,1%',
                '12,6&permil;',
                '73,3 anos'
            ],
            'PB' => [
                'https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg',
                'Paraíba',
                'PB',
                'João Pessoa',
                '56469,8',
                '4039277',
                '69,96',
                '119768000',
                '2,0',
                '12041,82',
                '0,677',
                '80,7%',
                '21,3&permil;',
                '72,8 anos'
            ],
            'PR' => [
                'https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg',
                'Paraná',
                'PR',
                'Curitiba',
                '199307,9',
                '11516840',
                '57,84',
                '573023000',
                '9,5',
                '23641,84',
                '0,749',
                '89,7%',
                '16,7&permil;',
                '78,4 anos'
            ],
            'PE' => [
                'https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg',
                'Pernambuco',
                'PE',
                'Recife',
                '98148,3',
                '9616621',
                '98,08',
                '223877000',
                '3,7',
                '21842,11',
                '0,675',
                '89,6%',
                '17,5&permil;',
                '73,9 anos'
            ],
            'PI' => [
                'https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg',
                'Piauí',
                'PI',
                'Teresina',
                '251577,7',
                '3273227',
                '13,01',
                '84455300',
                '1,4',
                '14763,98',
                '0,644',
                '84,5%',
                '26,5&permil;',
                '70,9 anos'
            ],
            'RJ' => [
                'https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg',
                'Rio de Janeiro',
                'RJ',
                'Rio de Janeiro',
                '43780,8',
                '17264943',
                '398,60',
                '622322000',
                '10,3',
                '38016,60',
                '0,779',
                '87,7%',
                '11,8&permil;',
                '76,1 anos'
            ],
            'RN' => [
                'https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg',
                'Rio Grande do Norte',
                'RN',
                'Natal',
                '52811,1',
                '3534165',
                '68,11',
                '132227000',
                '2,2',
                '15155,23',
                '0,676',
                '81,6%',
                '15,3&permil;',
                '74,4 anos'
            ],
            'RS' => [
                'https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg',
                'Rio Grande do Sul',
                'RS',
                'Porto Alegre',
                '281736,0',
                '11422973',
                '40,54',
                '597149000',
                '9,9',
                '25119,15',
                '0,741',
                '89,1%',
                '19,6&permil;',
                '77,3 anos'
            ],
            'RO' => [
                'https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg',
                'Rondônia',
                'RO',
                'Porto Velho',
                '237590,5',
                '1796460',
                '7,56',
                '50745000',
                '0,8',
                '24101,81',
                '0,658',
                '89,6%',
                '14,6&permil;',
                '73,8 anos'
            ],
            'RR' => [
                'https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg',
                'Roraima',
                'RR',
                'Boa Vista',
                '224299,0',
                '522636',
                '2,32',
                '151034000',
                '0,2',
                '28841,27',
                '0,665',
                '91,3%',
                '14,4&permil;',
                '73,9 anos'
            ],
            'SC' => [
                'https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg',
                'Santa Catarina',
                'SC',
                'Florianópolis',
                '95736,2',
                '7252502',
                '69,74',
                '463426000',
                '7,7',
                '29155,79',
                '0,774',
                '92,8%',
                '17,2&permil;',
                '79,7 anos'
            ],
            'SP' => [
                'https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg',
                'São Paulo',
                'SP',
                'São Paulo',
                '248209,4',
                '46289333',
                '184,67',
                '2222880000',
                '36,7',
                '47601,58',
                '0,783',
                '85,4%',
                '7,2&permil;',
                '77,4 anos'
            ],
            'SE' => [
                'https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg',
                'Sergipe',
                'SE',
                'Aracaju',
                '21915,1',
                '2318822',
                '100,46',
                '42015000',
                '0,7',
                '18374,69',
                '0,674',
                '80,7%',
                '23,6&permil;',
                '72,2 anos'
            ],
            'TO' => [
                'https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg',
                'Tocantins',
                'TO',
                'Palmas',
                '277720,5',
                '1590248',
                '5,72',
                '38685400',
                '0,6',
                '23945,84',
                '0,665',
                '92,5%',
                '18,2&permil;',
                '72,2 anos'
            ]
        ];
        ?>
        <table>
            <thead>
                <tr>
                    <th>Bandeira</th>
                    <th>Unidade federativa</th>
                    <th>Abreviação</th>
                    <th>Sede de Governo</th>
                    <th>Área (km&#178;)</th>
                    <th>População (2014)</th>
                    <th>Densidade (2005)</th>
                    <th>PIB (2015)</th>
                    <th>(&#37; total)(2015)</th>
                    <th>PIB per capta (R&#36;)(2015)</th>
                    <th>IDH (2010)</th>
                    <th>Alfabetização (2016)</th>
                    <th>Mortalidade Infantil (2016)</th>
                    <th>Expectativa de Vida (2016)</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ufs as $key => $value) {
                    $string = '<tr>';
                    $string .= "<td><img src=\"{$value[0]}\" alt=\"Bandeira do/de {$value[1]}\"></td>\n\t\t\t\t\t";
                    for ($i = 1; $i < 14; $i++) {
                        $string .= "<td>{$value[$i]}</td>\n\t\t\t\t\t";
                    }
                    $string .= "<td><a href=\"editar.php?id=$key\"><i class=\"fa-solid fa-pen-to-square\"></i></a></td>";
                    echo $string . "</tr>\n\t\t\t\t";
                }
                ?>
</tbody>
        </table>
    </main>
</body>

</html>