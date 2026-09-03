<!-- 2.    Criar um formulário com os campos (todos select):
    Fonte
    Cor da fonte
    Cor do fundo
    Ao clicar no botão, encaminhar as informações para um arquivo PHP formatar um texto qualquer pré-estipulado com as escolhas do usuário. -->

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>
<?php
    $cor_fundo = $_POST["cores-fundo"];

    echo "<body bgcolor=$cor_fundo>";
?>

    <form name="form" method="post">
        Fontes
        <select name="fontes">
            <option value="Times-New-Roman">Times New Roman</option>
            <option value="Arial">Arial</option>
            <option value="Courier-New">Courier New</option>
            <option value="Verdana">Verdana</option>
        </select>

        <br><br>

        Cor da Fonte
        <select name="cores-fonte">
            <option value="red">Vermelho</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
            <option value="black">Preto</option>
        </select>

        <br><br>

        Cor de Fundo
        <select name="cores-fundo">
            <option value="purple">Roxo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
            <option value="brown">Marrom</option>
        </select>

        <br><br>

        <input type="submit" value="Ok">
    </form>

    <?php
        $fonte = $_POST["fontes"];
        $cor_fonte = $_POST["cores-fonte"];
        $cor_fundo = $_POST["cores-fundo"];

        echo "<br>";

        echo "<div style=\"font-family: $fonte; color: $cor_fonte; background-color: $cor_fundo; text-align: center; padding: 100px; margin: 0px 200px; font-size: 40px;\">O estado selecionado foi: $fonte, $cor_fonte, $cor_fundo</div>";
    ?>

<?php
    echo "</body>";
?>
</html>