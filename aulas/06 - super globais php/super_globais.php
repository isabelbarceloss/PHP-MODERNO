<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php
                setcookie("dia-da-semana", "TERÇA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                echo "<h1>Super Global GET</h1>";
                var_dump($_GET);

                echo "<p>O GET pega só pela url.</p>";

                echo "<h1>Super Global POST</h1>";
                var_dump($_POST);

                echo "<p>O POST pega só pelos pacotes/cabeçalho.</p>";

                echo "<h1>Super Global REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<p>O REQUEST pega os dois jeitos, gerando somente um vetor com os dois juntos.</p>";

                echo "<h1>Super Global COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<p>COOKIES são uma forma de rastrear ou identificar usuários em sessões subsequentes. </p>";

                echo "<h1>Super Global SESSION</h1>";
                var_dump($_SESSION);

                echo "<p>SESSION é usada para armazenar dados do usuário que persistem entre diferentes páginas de um site durante uma sessão.</p>";

                echo "<h1>Super Global ENV</h1>";
                var_dump($_ENV);

                echo "ENV é uma superglobal específica que contém as variáveis de ambiente disponíveis para o script.";

                echo "<h1>Super Global SERVER</h1>";
                var_dump($_SERVER);

                echo "<p>SERVER é uma superglobal que contém informações sobre o servidor web, o ambiente de execução do script e a requisição do cliente.</p>";

                echo "<h1>Super Global GLOBALS</h1>";
                var_dump($GLOBALS);

                echo "<p>GLOBALS é uma variável superglobal que contém todas as variáveis definidas no escopo global do script</p>";
            ?>
        </pre>
    </main>
</body>
</html>