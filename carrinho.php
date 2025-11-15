<?php
session_start();
$arquivoCarrinho = "carrinho.json";
if (!file_exists($arquivoCarrinho)) {
    file_put_contents($arquivoCarrinho, json_encode([]));
}
$data = json_decode(file_get_contents("php://input"), true);
$text = $data['text'] ?? null;
$imagePath = $data['imagePath'] ?? null;
if (!$text || !$imagePath) {
    exit(json_encode(["erro" => "Dados faltando"]));
}
$carrinho = json_decode(file_get_contents($arquivoCarrinho), true);
$carrinho[] = [
    "text" => $text,
    "imagePath" => $imagePath
];
file_put_contents($arquivoCarrinho, json_encode($carrinho, JSON_PRETTY_PRINT));
echo json_encode(["status" => "ok"]);
?>