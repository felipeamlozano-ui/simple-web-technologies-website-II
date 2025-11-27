<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

// Verifica se o usuário está logado
if (isset($_SESSION['Status']) && $_SESSION['Status'] === false) {
    http_response_code(401);
    echo json_encode(["erro" => "Usuário não logado"]);
    exit;
}
// Nome do usuário logado
$usuario = $_SESSION['nomeglobal'] ?? '';


$pastaCarrinhos = __DIR__ . "/JAVASCRIPT/react-build";
if (!is_dir($pastaCarrinhos)) {
    mkdir($pastaCarrinhos, 0777, true);
}

// Nome seguro do arquivo (substitui espaços e caracteres especiais)
$arquivoCarrinho = $pastaCarrinhos . preg_replace("/[^a-zA-Z0-9_-]/", "_", $usuario) . ".json";

// Lê o carrinho existente do usuário ou inicializa vazio
if (file_exists($arquivoCarrinho)) {
    $carrinho = json_decode(file_get_contents($arquivoCarrinho), true);
    if (!is_array($carrinho)) $carrinho = [];
} else {
    $carrinho = [];
}

// Recebe dados do POST
$data = json_decode(file_get_contents("php://input"), true);
$text = $data['text'] ?? null;
$imagePath = $data['imagePath'] ?? null;
$idcart = $data['idcart'] ?? null;
// Se houver item novo, adiciona ao carrinho
if ($text && $imagePath) {
    $carrinho[] = ["text" => $text, "imagePath" => $imagePath];
    file_put_contents($arquivoCarrinho, json_encode($carrinho, JSON_PRETTY_PRINT));
}

// Parte que atualiza a contagem do carrinho na sessão
if ($idcart) {
    $valorproscript = count($carrinho);
    echo json_encode($valorproscript);
    exit;
}

// Retorna sempre o carrinho atual
echo json_encode($carrinho);
$_SESSION['carrinho'] = $carrinho;

