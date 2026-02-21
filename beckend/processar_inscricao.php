<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.html');
    exit;
}

$nome = trim((string)($_POST['nome'] ?? ''));
$whatsapp = trim((string)($_POST['whatsapp'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$municipio = trim((string)($_POST['municipio'] ?? ''));
$area = trim((string)($_POST['area'] ?? ''));
$cargo = trim((string)($_POST['cargo'] ?? ''));

$erros = [];

if ($nome === '') {
    $erros[] = 'Nome é obrigatório.';
}

if ($whatsapp === '') {
    $erros[] = 'WhatsApp é obrigatório.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = 'E-mail inválido.';
}

if ($municipio === '') {
    $erros[] = 'Município é obrigatório.';
}

if ($area === '') {
    $erros[] = 'Área de atuação é obrigatória.';
}

if ($cargo === '') {
    $erros[] = 'Cargo é obrigatório.';
}

if ($erros !== []) {
    http_response_code(422);
    echo '<h2>Erro na validação</h2>';
    echo '<ul>';
    foreach ($erros as $erro) {
        echo '<li>' . htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') . '</li>';
    }
    echo '</ul>';
    echo '<a href="../index.html">Voltar</a>';
    exit;
}

require __DIR__ . '/conexao.php';

$sql = 'INSERT INTO inscricoes (nome, whatsapp, email, municipio, area_atuacao, cargo) VALUES (:nome, :whatsapp, :email, :municipio, :area, :cargo)';
$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':nome' => $nome,
    ':whatsapp' => $whatsapp,
    ':email' => $email,
    ':municipio' => $municipio,
    ':area' => $area,
    ':cargo' => $cargo,
]);

header('Location: obrigado.php');
exit;
