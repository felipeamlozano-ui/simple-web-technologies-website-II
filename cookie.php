<?php
header("Content-Type: application/json; charset=utf-8");
session_start();

// Lê o JSON enviado
$data = json_decode(file_get_contents("php://input"), true);
$tema = $data['tema'] ?? null;

// Se recebeu um tema via POST -> grava no cookie
if ($tema) {

    setcookie("tema", $tema, time() + (30 * 24 * 60 * 60), "/");

    echo json_encode([
        "status" => "ok",
        "mensagem" => "Tema atualizado",
        "valor" => $tema
    ]);
    exit;
}

// Se NÃO recebeu tema → retorna o cookie atual (ou padrão)
$temaatual = $_COOKIE['tema'] ?? "claro";

echo json_encode([
    "status" => "ok",
    "mensagem" => "Tema atual",
    "valor" => $temaatual
]);
