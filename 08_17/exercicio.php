<!-- Criar uma variável que receba um número inteiro (1 ou 2). Se for valor 1, construir um html com link para FATEC Ourinhos, e se estiver com o valor 2, construir a página com o link para a Fatec Bauru -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício dia 17</title>
</head>
<body>
    <?php
        $valor = 1; // Alterar para 2 para testar o outro link

        if ($valor == 1) {
            echo "<a href=\"https://www.fatecourinhos.edu.br/\" target=\"_blank\">FATEC Ourinhos</a>";
        } elseif ($valor == 2) {
            echo "<a href=\"https://www.fatecbauru.edu.br/\" target=\"_blank\">FATEC Bauru</a>";
        } else {
            echo "Valor inválido. Por favor, insira 1 ou 2.";
        }
    ?>
</body>
</html>