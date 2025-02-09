<?php
// Inicia a sessão no início do arquivo
session_start();

// Inclua o arquivo PessoaDAO.php
$pathPessoaDAO = __DIR__ . '/PessoaDAO.php';
if (!file_exists($pathPessoaDAO)) {
    die("Erro: O arquivo PessoaDAO.php não foi encontrado no caminho: " . $pathPessoaDAO);
}
include_once($pathPessoaDAO);

// Verifica se o método da requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pega os dados do formulário
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Valida os campos
    if (empty($usuario) || empty($senha)) {
        echo "<script>alert('Por favor, preencha todos os campos!'); window.location.href = 'login.php';</script>";
        exit();
    }

    // Chama a função de login
    if (!function_exists('login')) {
        die("Erro: A função 'login()' não foi encontrada no arquivo PessoaDAO.php.");
    }

    $resultado = login($usuario, $senha);

    if ($resultado) {
        // Login bem-sucedido
        $_SESSION['usuario_id'] = $resultado['idusuario']; // Ajuste com base na estrutura do banco
        $_SESSION['usuario_nome'] = $resultado['nome'];
        header("Location: Listar.php");
        exit();
    } else {
        // Login falhou
        echo "<script>alert('Usuário ou senha incorretos!'); window.location.href = 'login.php';</script>";
        exit();
    }
}
