<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: gray;
            padding: 20px;
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-control {
            margin-bottom: 15px;
            padding: 10px;
            width: calc(100% - 20px);
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button type="submit" class="btn">Login</button>
    </form>
</div>
<?php

// Dados de login (simulação de um banco de dados)
$usuarios = [
    'usuario1' => 'senha1',
    'usuario2' => 'senha2',
    // Adicione mais usuários conforme necessário
];

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se o usuário existe na lista e se a senha está correta
    if (array_key_exists($username, $usuarios) && $usuarios[$username] == $password) {
        // Autenticação bem-sucedida, redireciona para a página principal, por exemplo
        header("Location: principal.php");
        exit;
    } else {
        // Caso contrário, exibe mensagem de erro
        echo "<p>Usuário ou senha inválidos.</p>";
    }
}

?>
</body>
</html>
