<!-- Crie um formulário HTML para ler a idade de um nadador e classificá-lo em uma das seguintes categorias:
infantil A = 5 - 7 anos
infantil B = 8-10 anos
juvenil A = 11-13 anos
juvenil B = 14-17 anos
adulto = maiores de 18 anos -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Classificação de Nadadores</h1>
    <form method="post" action="">
        <label for="idade">Idade do nadador:</label>
        <input type="number" id="idade" name="idade" required>
        <br><br>
        <input type="submit" value="Classificar">
    </form>

    <?php
        if ($_POST) {
            $idade = $_POST['idade'];
    
            if ($idade >= 5 && $idade <= 7) {
                $categoria = "Infantil A";
            } elseif ($idade >= 8 && $idade <= 10) {
                $categoria = "Infantil B";
            } elseif ($idade >= 11 && $idade <= 13) {
                $categoria = "Juvenil A";
            } elseif ($idade >= 14 && $idade <= 17) {
                $categoria = "Juvenil B";
            } else {
                $categoria = "Adulto";
            }
    
            echo "<p>O nadador pertence à categoria: $categoria</p>";
        }
    ?>
</body>
</html>