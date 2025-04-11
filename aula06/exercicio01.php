<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 </title>
</head>
<body>
    <style>
        table {
           margin-left: auto;
           margin-right: auto;
        }
        th, td {
            border: 2px solid #333;
            padding: 15px;
            text-align: center;
        }
        .par {
            background-color: rgb(3, 92, 88); 
            color: white;
        }
        .impar {
            background-color: rgb(235, 12, 124); 
            color: white;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <?php
            for ($col = 1; $col <= 4; $col++) {
                echo "<th>Coluna $col</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($linha = 1; $linha <= 8; $linha++) {
            $ClasseLinha = ($linha % 2 === 0) ? "par" : "impar";
            echo "<tr class=\"$ClasseLinha\">";
            
            for ($coluna = 1; $coluna <= 4; $coluna++) {
                echo "<td>Linha {$linha}, Coluna {$coluna}</td>";
            }
            
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</body>
</html>