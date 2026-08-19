<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>
<body>
    <?php
        $nome = "Juvenilson";

        echo "<marquee>$nome</marquee>";

        echo "<br>";

        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 == 0) {
                echo "<p style='color: red;'>$i</p>";
            } else {
                echo "<p style='color: blue;'>$i</p>";
            }
        }
    ?>    
</body>
</html>