<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
<style>
        table {
           margin-left: auto;
           margin-right: auto;
        }
          
        th, td {
            border: 2px solid #444;
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: gray;
            color: white;
        }

        .Eletrônicos {
            background-color:rgb(211, 138, 159);
        }

        .Roupas {
            background-color:rgb(123, 215, 197);
        }

        .Beleza {
            background-color:rgb(216, 166, 225);
        }
        .Acessório {
            background-color:rgb(197, 231, 158);
        }
        .Eletrodoméstico{
            background-color:rgb(218, 202, 97);
        }
        
    </style>
</head>
<body>
<br>
<br>
<?php
$produtos = [
    [
        'nome' => 'Kit de Maquiagem',
        'preco' => 179.39,
        'categoria' => 'Beleza'
    ],
    [
        'nome' => 'Bolsa',
        'preco' => 250.00,
        'categoria' => 'Acessório'
    ],
    [
        'nome' => 'Televisão',
        'preco' => 1500.00,
        'categoria' => 'Eletrônicos'
    ],
    [
        'nome' => 'Geladeira',
        'preco' => 7000.00,
        'categoria' => 'Eletrodoméstico'
    ],
    [
        'nome' => 'calça',
        'preco' => 76.99,
        'categoria' => 'Roupas'
    ]
];
?>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto): 
            $classe = $produto['categoria'];
        ?>
            <tr class="<?= $classe ?>">
                <td><?= $produto['nome'] ?></td>
                <td><?= number_format($produto['preco'], 2, ',', '.') ?></td>
                <td><?= $produto['categoria'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>