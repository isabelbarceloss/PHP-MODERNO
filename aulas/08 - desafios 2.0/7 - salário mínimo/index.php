<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7 - Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $minimo = 1518;
    $salario = $_GET['sal'] ?? 0;
?>
<main>
    <h1>Informe seu salário</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

        <label for="sal">Salário (R$)</label>
        <input type="number" name="sal" id="sal" value="<?= $salario ?>" step="0.01">
        <p>Considerando o salário mínimo de 
            <strong>R$<?= number_format($minimo, 2, ",", ".") ?></strong>
        </p>
        <input type="submit" value="Calcular">
    </form>
</main>

<section>
    <h2>Resultado Final</h2>
    <?php 
        if ($salario > 0) {
            $total = intdiv((int)$salario, $minimo);
            $diferenca = $salario - ($total * $minimo);

            echo "<p>Você ganha <strong>$total</strong> salários mínimos + <strong>R$" . number_format($diferenca, 2, ",", ".") . "</strong>.</p>";
        }
    ?>
</section>
</body>
</html>