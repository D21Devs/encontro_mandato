<?php

declare(strict_types=1);
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inscrição enviada</title>
  <style>
    body {
      margin: 0;
      min-height: 100vh;
      display: grid;
      place-items: center;
      background: #6D1BB8;
      font-family: Inter, Arial, sans-serif;
    }

    .box {
      width: min(560px, calc(100% - 32px));
      background: #ffffff;
      border-radius: 18px;
      padding: 28px;
      text-align: center;
      color: #1f1f1f;
    }

    h1 {
      margin: 0 0 12px;
      font-size: 24px;
    }

    p {
      margin: 0 0 22px;
      font-size: 16px;
    }

    a {
      display: inline-block;
      text-decoration: none;
      background: #f4bf00;
      color: #111111;
      font-weight: 700;
      border-radius: 10px;
      padding: 12px 18px;
    }
  </style>
</head>
<body>
  <section class="box">
    <h1>Obrigado por se inscrever.</h1>
    <p>Recebemos seus dados com sucesso.</p>
    <a href="../index.html">Voltar para a página inicial</a>
  </section>
</body>
</html>
