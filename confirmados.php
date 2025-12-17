<?php
header("Content-Type: application/json");

$cookieName = "itens_confirmados";

// Lê o corpo da requisição
$body = file_get_contents("php://input");
$data = json_decode($body, true);

// Recupera o cookie atual
$confirmados = [];
if (isset($_COOKIE[$cookieName])) {
    $confirmados = json_decode($_COOKIE[$cookieName], true);
    if (!is_array($confirmados)) {
        $confirmados = [];
    }
}

// Se for POST com Item_id, adiciona ou atualiza
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($data['Item_id'])) {
    $Item_id = $data['Item_id'];
    $confirmados[$Item_id] = true; // marca como confirmado

    setcookie(
        $cookieName,
        json_encode($confirmados),
        [
            'expires' => time() + 7 * 24 * 60 * 60, // 7 dias
            'path' => '/',
            'secure' => false,    // false para localhost
            'httponly' => false,
            'samesite' => 'Lax'
        ]
    );

    // Retorna os itens confirmados imediatamente
    echo json_encode([
        "acao" => "salvo",
        "confirmados" => $confirmados
    ]);
    exit;
}

// Se for GET ou outra requisição, apenas retorna os itens confirmados
echo json_encode([
    "acao" => "listar",
    "confirmados" => $confirmados
]);
