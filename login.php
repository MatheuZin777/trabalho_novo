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
