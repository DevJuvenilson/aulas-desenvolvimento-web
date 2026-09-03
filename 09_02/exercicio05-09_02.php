<!--5.    Receber o nome de um produto, o valor dele e calcular o valor das parcelas com base na quantidade de vezes escolhida.
•     Campo Text 1: Nome do produto.
•     Campo Text 2: Valor total do produto.
•     Campo Select: Quantidade de parcelas (1x à vista, 2x sem juros, 3x com 5% de acréscimo).
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Parcelas</title>
</head>
<body>
    <form method="post">
        Nome do produto: <input type="text" name="nome"><br><br>
        Valor total do produto: <input type="number" name="valor" step="0.01"><br><br>
        Quantidade de parcelas:
        <select name="parcelas">
            <option value="1">1x à vista</option>
            <option value="2">2x sem juros</option>
            <option value="3">3x com 5% de acréscimo</option>
        </select><br><br>
        <input type="submit" value="Calcular Parcelas">
    </form>

    <?php
        $nome = $_POST["nome"];
        $valor = $_POST["valor"];
        $parcelas = $_POST["parcelas"];
        $valorParcela = 0;
        if ($parcelas == "1") {
            $valorParcela = $valor;
        } elseif ($parcelas == "2") {
            $valorParcela = $valor / 2;
        } elseif ($parcelas == "3") {
            $valorComAcrescimo = $valor * 1.05; // 5% de acréscimo
            $valorParcela = $valorComAcrescimo / 3;
        }
        echo "<br>Produto: $nome<br>";
        echo "Valor total: R$ " . number_format($valor, 2, ',', '.') . "<br>";
        echo "Quantidade de parcelas: $parcelas<br>";
        echo "Valor de cada parcela: R$ " . number_format($valorParcela, 2, ',', '.');
    ?>
</body>
</html>