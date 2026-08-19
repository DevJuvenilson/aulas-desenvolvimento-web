<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <?php
        $numero = 7;

        echo "<h1>Tabuada do Número $numero</h1>";

        echo "<br>";

        for ($i = 1; $i <= 10; $i++) {
            $multiplicacao = $numero * $i;
            echo "<p>$numero x $i = $multiplicacao</p>";        
        }
    ?>    
</body>
</html> 