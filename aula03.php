<!-- MANIPULANDO FORMULÁRIOS -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário em PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 30px;
        }

        .container {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .mensagem {
            margin: 20px auto;
            width: 100%;
            max-width: 500px;
            padding: 20px;
            border-radius: 6px;
            background-color: #e7f3fe;
            color: #0b5394;
            border: 1px solid #b3d7ff;
        }

        .erro {
            background-color: #ffe6e6;
            color: #d8000c;
            border: 1px solid #ffbaba;
        }
    </style>
</head>
<body>

    <h1>Formulário em PHP</h1>

    <div class="container">
        <form action="" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Enviar">
        </form>
    </div>

<?php
// BLOCO PHP PARA TRATAMENTO DO FORMULÁRIO
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário de forma segura
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $email = htmlspecialchars(trim($_POST["email"]));

    // Verificando se os campos não estão vazios
    if (!empty($nome) && !empty($email)) {
        echo "<div class='mensagem'>";
        echo "<h2>Bem-vindo, $nome!</h2>";
        echo "<p><strong>Dados recebidos:</strong></p>";
        echo "Nome: $nome<br>";
        echo "Email: $email<br>";
        echo "</div>";
    } else {
        echo "<div class='mensagem erro'>";
        echo "<strong>Erro:</strong> Todos os campos devem ser preenchidos.";
        echo "</div>";
    }
}
?>

</body>
</html>
