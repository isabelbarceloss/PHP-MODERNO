<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <h1>Resultado:</h1>

        <?php
            $real = $_GET ["din"] ?? 0;
            $cotação = 5.42;
            $dólar = $real / $cotação;

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong></p>";
        ?>

        <button onclick="javascript: history.go(-1)">Voltar</button>
    </main>
</body>
</html>