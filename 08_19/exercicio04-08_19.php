<!-- Ler 2 valores em um formulário HTML para calcular e escrever a soma dos inteiros existentes entre os 2
valores lidos (incluindo os valores lidos na soma). Considere que o segundo valor lido será sempre maior que o primeiro valor lido. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <h1>Soma dos Inteiros entre dois Valores</h1>
    <form method="post" action="">
        <label for="valor1">Primeiro valor:</label>
        <input type="number" id="valor1" name="valor1" required>
        <br><br>
        <label for="valor2">Segundo valor:</label>
        <input type="number" id="valor2" name="valor2" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_POST) {
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];

            $soma = 0;
            for ($i = $valor1; $i <= $valor2; $i++) {
                $soma += $i;
            }

            echo "<p>A soma dos inteiros entre $valor1 e $valor2 é: $soma</p>";
        }
    ?>
</body>
</html>