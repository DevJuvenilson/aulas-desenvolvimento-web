<!-- Uma loja fornece 10% de desconto para funcionários e 5% de desconto para clientes vips. Faça um programa em PHP, que calcule o valor total a ser pago por uma pessoa. O programa deverá ter um formulário HTML para ler o valor total da compra efetuada e um código que identifique se o comprador é um cliente comum (1), funcionário (2) ou vip (3). -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Lojinha da FATEC</h1>

    <form method="post" action="">
        <label for="valor">Valor total da compra:</label>
        <input type="number" id="valor" name="valor" step="0.01" required>
        <br><br>
        <label for="tipo">Tipo de comprador:</label>
        <input type="number" id="tipo" name="tipo" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_POST) {
        $valor = $_POST['valor'];
        $tipo = $_POST['tipo'];

        if ($tipo == 1) {
            $desconto = 0;
        } elseif ($tipo == 2) {
            $desconto = 0.10;
        } elseif ($tipo == 3) {
            $desconto = 0.05;
        } else {
            echo "<p>Tipo de comprador inválido.</p>";
            exit;
        }

        $valorFinal = $valor - ($valor * $desconto);
        echo "<p>O valor final a ser pago é: R$ " . number_format($valorFinal, 2, ',', '.') . "</p>";
    }
    ?>

</body>
</html>
</html>