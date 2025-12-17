<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');
// Função que peguei na internet para gerar id aleatório
function gerarIdAleatorio($tamanho = 16)
{

    $bytes = random_bytes($tamanho);

    $id = base64_encode($bytes);

    $id = str_replace(['=', "\n", "\r"], '', $id);
    return $id;
}

if (isset($_SESSION['Status']) && $_SESSION['Status'] === false) {
    http_response_code(401);
    echo json_encode(["erro" => "Usuário não logado"]);
    exit;
}

$usuario = $_SESSION['nomeglobal'] ?? '';


$pastaCarrinhos = __DIR__ . "/JAVASCRIPT/react-build";
if (!is_dir($pastaCarrinhos)) {
    mkdir($pastaCarrinhos, 0777, true);
}


$arquivoCarrinho = $pastaCarrinhos . preg_replace("/[^a-zA-Z0-9_-]/", "_", $usuario) . ".json";

// Lê o carrinho existente do usuário ou inicializa vazio
if (file_exists($arquivoCarrinho)) {
    $carrinho = json_decode(file_get_contents($arquivoCarrinho), true);
    if (!is_array($carrinho)) $carrinho = [];
} else {
    $carrinho = [];
}


$data = json_decode(file_get_contents("php://input"), true);
$text = $data['text'] ?? null;
$imagePath = $data['imagePath'] ?? null;
$idcart = $data['idcart'] ?? null;

if ($text && $imagePath) {
    $id = gerarIdAleatorio(16);
    $carrinho[] = ["text" => $text, "imagePath" => $imagePath, "Item_id" => $id];
    file_put_contents($arquivoCarrinho, json_encode($carrinho, JSON_PRETTY_PRINT));
}


if ($idcart) {
    $valorproscript = count($carrinho);
    echo json_encode($valorproscript);
    exit;
}

// Retorna sempre o carrinho atual
echo json_encode($carrinho);
$_SESSION['carrinho'] = $carrinho;

