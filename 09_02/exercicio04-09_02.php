<!--4.    Converter um valor em Reais (BRL) para uma moeda estrangeira selecionada.
•     Campo Text: Valor em Reais (R$).
•     Campo Select: Moeda de destino (Dólar, Euro ou Libra).
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
</head>
<body>
    <form method="post">
        Valor em Reais (R$): <input type="number" name="valor" step="0.01"><br><br>
        Moeda de destino:
        <select name="moeda">
            <option value="dolar">Dólar</option>
            <option value="euro">Euro</option>
            <option value="libra">Libra</option>
        </select><br><br>
        <input type="submit" value="Converter">
    </form>

    <?php
        $valor = $_POST["valor"];
        $moeda = $_POST["moeda"];
        $taxa = 0;
        
        if ($moeda == "dolar") {
            $taxa = 5.09;
        } elseif ($moeda == "euro") {
            $taxa = 5.90;
        } elseif ($moeda == "libra") {
            $taxa = 6.87;
        }
        
        $valorConvertido = $valor / $taxa;
        echo "<br>Valor convertido: " . number_format($valorConvertido, 2, ',', '.') . " " . ucfirst($moeda);
    ?>
</body>
</html>