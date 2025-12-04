<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1 - Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_GET["num"] ?? 0;

                $ant = $n - 1;
                $suc = $n + 1; 

                echo "O número escolhido foi <strong>$n</strong>"; 
                echo "<br>O antecessor é <strong>$ant</strong>"; 
                echo "<br>O sucessor é <strong>$suc</strong>";
            ?>

            <button onclick="javascript: history.go(-1)">Voltar</button>
        </p>
    </main>
</body>
</html>