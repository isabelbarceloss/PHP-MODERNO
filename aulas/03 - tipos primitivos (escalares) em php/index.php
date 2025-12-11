<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>

    <h1>Testes de tipos primitivos - escalares</h1>

    <?php

        // 0x = hexadecimal | 0b = binário | 0 = Octal

        $num = 300;
        echo "O valor da variável é $num";

        -#-

        $v = 300;
        var_dump($v); // mostra o valor e o tipo primitivo

        -#-

        $num = 3e2; // 3 x 10 elevado a 2
        echo "O valor é $num";

        -#-

        $num = (int) "950"; // coerção, declarar o tipo da variável
        var_dump($num);

        -#-

        $casado = false;
    	var_dump($casado);
    	echo "O valor para casado é $casado";
    	//quando variáveis booleanas são executadas por um print/echo, o valor >true< é 1 e o >false< é vazio

        -#-

        //EXEMPLOS DE TIPOS COMPOSTOS

        // $vet = [6, 2.5, "Maria", 3, false]; //da para usar vários tipos primitivos (escalares) dentro de uma array
    	// var_dump($vet);

        -#-
    	
    	// class Pessoa {
    	// 	private string $nome;
    		
    	// }
    	
    	// $p = new Pessoa;
    	// var_dump($p);
    ?>
</body>
</html>