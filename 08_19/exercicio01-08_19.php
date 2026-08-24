<!-- Crie um formulário HTML para ler uma medida em polegadas e imprimir a equivalente em centímetros, sabendo que 2.54 cm equivale a 1 polegada. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Conversor de Polegadas para Centímetros</h1>
    <form method="post" action="">
        <label for="polegadas">Medida em Polegadas:</label>
        <input type="number" id="polegadas" name="polegadas" step="0.01" required>
        <br><br>
        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_POST) {
        $polegadas = $_POST['polegadas'];
        $centimetros = $polegadas * 2.54;
        echo "<p>$polegadas polegadas equivalem a $centimetros centímetros.</p>";
    }
    ?>
</body>
</html>
</html>