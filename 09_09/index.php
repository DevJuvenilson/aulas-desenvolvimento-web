<!-- Criar um formulário HTML, tal como a imagem, para efetuar a gravação em banco de dados, através do PHP. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Gravação de BD</title>
</head>
<body>
    <p>Envie uma mensagem preenchendo o formulário abaixo</p>
    <br>
    <form method="post">
        <label for="nome">Seu Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="telefone">Seu Telefone:</label>
        <input type="text" name="telefone" id="telefone" required>
        <br>
        <label for="email">Seu Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="novidades">Deseja receber nossas novidades?</label>
        <input type="radio" name="novidades" id="sim" value="sim" required>
        <label for="sim">Sim</label>
        <input type="radio" name="novidades" id="nao" value="nao" required>
        <label for="nao">Não</label>
        <br>
        <label for="mensagem">Sua Mensagem:</label>
        <textarea name="mensagem" id="mensagem" required></textarea>

        <input type="submit" value="Enviar">
    </form>

    <?php
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $database = "devweb";

        $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $novidades = $_POST['novidades'];
        $mensagem = $_POST['mensagem'];

        if($novidades == "sim") {
            $novidades = 1;
        } else {
            $novidades = 0;
        }

        $sql = "INSERT INTO mensagens (nome, telefone, email, novidades, mensagem) VALUES ('$nome', '$telefone', '$email', '$novidades', '$mensagem')";

        if($nome && $telefone && $email && $novidades && $mensagem) {
            if (mysqli_query($conexao, $sql)) {
                echo "Mensagem enviada com sucesso!";
            } else {
                echo "Erro ao enviar mensagem: " . mysqli_error($conexao);
            }
        } else {
            echo "Por favor, preencha todos os campos corretamente.";
        }
    ?>
</body>
</html>