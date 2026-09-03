<!--3.    Criar um sistema que calcula o preço final de um produto com base na categoria do cliente.
•     Campo Text: Valor total da compra.
•     Campo Select: Tipo de cliente (Comum - 0%, VIP - 10%, Funcionário - 20%).
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preço Final</title>
</head>
<body>
    <form name="form" method="post">
        Valor da compra: <input type="number" name="valor"><br><br>
        Tipo de cliente:
        <select name="tipo">
            <option value="comum">Comum</option>
            <option value="vip">VIP</option>
            <option value="funcionario">Funcionário</option>
        </select><br><br>
        <input type="submit" value="Calcular Preço Final">
    </form>

    <?php
        $valor = $_POST["valor"];
        $tipo = $_POST["tipo"];
        $desconto = 0;
        
        if ($tipo == "vip") {
            $desconto = 0.10;
        } elseif ($tipo == "funcionario") {
            $desconto = 0.20;
        }
        
        $precoFinal = $valor - ($valor * $desconto);
        echo "<br>Preço final: R$ " . number_format($precoFinal, 2, ',', '.');
    ?>  
</body>
</html>