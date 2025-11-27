<?php

session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
$Logado = false;
$nomeglobal = '';
$fotoglobal = '';
$arquivoUsuarios = "usuarios.txt";
if (!file_exists($arquivoUsuarios)) {
    file_put_contents($arquivoUsuarios, json_encode([]));
}
$usuarios = json_decode(file_get_contents($arquivoUsuarios), true);
if (!is_array($usuarios)) {
    $usuarios = [];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $nome = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $usuarioEncontrado = false;

        foreach ($usuarios as $user) {
            if ($user['nome'] === $nome && $user['email'] === $email && $user['senha'] === $password) {
                $usuarioEncontrado = true;
                break;
            }
        }

        if ($usuarioEncontrado) {
            $nomeglobal = $nome;
            foreach ($usuarios as $user) {
                if ($user['nome'] === $nomeglobal) {
                    $fotoglobal = $user['foto'];
                    break;
                }
            }
            $_SESSION['nomeglobal'] = $nome;
            $_SESSION['fotoglobal'] = $fotoglobal;
            $Logado = true;
            $_SESSION['Status'] = $Logado;
            echo "<script>
                alert('Logado com sucesso');
                window.location.href='./HTML/paginaprincipal.php';
            </script>";
        } else {
            echo "<script>
                alert('Nome, email ou senha incorretos!');
                window.location.href='./HTML/login.html';
            </script>";
        }
        exit;
    } elseif (isset($_POST['name1']) && isset($_POST['email1']) && isset($_POST['password1']) && isset($_POST['foto'])) {
        $nome1 = $_POST["name1"];
        $email1 = $_POST["email1"];
        $password1 = $_POST["password1"];
        $fotoescolhida = $_POST["foto"];
        $fotoselecionada = ($fotoescolhida === 'imagem1') ? 1 : 2;
        foreach ($usuarios as $user) {
            if ($user['nome'] === $nome1) {
                echo "<script>alert('Esse nome já existe'); window.location.href='./HTML/login.html';</script>";
                exit;
            }
            if ($user['email'] === $email1) {
                echo "<script>alert('Esse email já foi registrado'); window.location='./HTML/login.html';</script>";
                exit;
            }
        }
        $novoUsuario = [
            "nome" => $nome1,
            "email" => $email1,
            "senha" => $password1,
            "foto" => $fotoselecionada
        ];

        $usuarios[] = $novoUsuario;
        file_put_contents($arquivoUsuarios, json_encode($usuarios, JSON_UNESCAPED_UNICODE));

        echo "<script>
            alert('Registrado com sucesso! Faça Login!');
            window.location.href='./HTML/login.html';
        </script>";
        exit;
    }
}
