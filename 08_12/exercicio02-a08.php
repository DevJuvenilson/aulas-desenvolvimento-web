<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <?php
        echo "<h1>6 Números Aleatórios</h1>";

        echo "<br>";

        for ($i = 1; $i <= 6; $i++) {
            $randomNum = rand();
            echo "<p>$i º Número: $randomNum</p>";        
        }
    ?>    
</body>
</html> 