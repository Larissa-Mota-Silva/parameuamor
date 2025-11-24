<?php
// Define a data inicial do relacionamento
$data_inicio = '2025-08-18 16:08:00';

// Converte a data para timestamp (segundos desde 1970)
$inicio_timestamp = strtotime($data_inicio);

// Pega o horário atual
$agora = time();

// Calcula diferença inicial (ainda não usada aqui, mas deixada caso queira usar depois)
$diferenca_inicial = $agora - $inicio_timestamp;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larissa e Rafa</title>
    <!-- Importa o CSS com os estilos gerais -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="intro-bg"> <!-- Aplica o fundo da tela inicial -->

    <!-- Botão que leva para a página principal do site -->
    <button class="botao-brilhante" onclick="window.location.href='love.php'">Entrar</button>

</body>

</html>