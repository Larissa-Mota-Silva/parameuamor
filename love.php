<?php
$startDate = strtotime("2025-08-18 16:08:00");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rafael & Larissa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="love-bg">

    <div class="love-container fade-in">

        <!-- TÍTULO -->
        <h1 class="love-title">Rafael & Larissa</h1>

        <!-- CONTADOR -->
        <p class="timer-text">Vocês estão juntos há:</p>
        <p id="contador" class="timer"></p>

        <!-- LINHA COM IMAGEM + TEXTO -->
        <div class="love-row">

            <!-- CARROSSEL -->
            <div class="image-box">
                <div id="carouselLove" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/foto1.jpg" class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="img/foto2.jpg" class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="img/foto3.jpg" class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="img/foto4.jpg" class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="img/foto5.jpg" class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="img/foto6.jpg" class="d-block w-100">
                        </div>
                    </div>
                </div>
            </div>

            <!-- DECLARAÇÃO -->
            <div class="declaration-box">

                <h2>Amor</h2>
                <p>
                    Obrigada por cuidar do meu coração,<br>
                    por ser casa quando o mundo uivava tempestade.<br>
                    Obrigada por ser meu melhor amigo,<br>
                    mesmo podendo escolher qualquer outro horizonte.<br>
                    Obrigada por ser o meu lugar favorito,<br>
                    onde posso despir a alma sem que o medo me acompanhe.<br>
                    Obrigada por acreditar,<br>
                    quando até eu tremia diante das próprias mãos.<br>
                    Obrigada por fazer do amor um abrigo —<br>
                    e por nunca desistir de nós.<br><br>

                    Há uma ironia quase divina nisso tudo:<br>
                    antes de você, meus versos sangravam.<br>
                    Tudo o que eu escrevia tinha gosto de ausência,<br>
                    ecoava nos recantos mais sombrios do peito,<br>
                    como se a poesia só pudesse nascer da dor.<br>
                    Mas então você pediu:<br>
                    “Mostra-me algo que escreveu quando estava feliz.”<br>
                    E eu percebi que a felicidade<br>
                    nunca havia encontrado morada nas minhas linhas.<br><br>

                    Até você.<br><br>

                    Porque, quando tento te escrever,<br>
                    um clarão percorre meu corpo inteiro.<br>
                    As palavras, antes inquietas, agora repousam serenas,<br>
                    adormecidas na segurança da tua presença.<br>
                    Há uma paz em te amar<br>
                    que não cabe no silêncio,<br>
                    nem no pranto —<br>
                    transborda em lágrimas que não ferem,<br>
                    apenas purificam,<br>
                    como chuva doce que devolve vida à terra seca.<br><br>

                    E então descobri o milagre:<br>
                    a poesia começou a brotar das pequenas coisas,<br>
                    das cores, dos gostos, dos lugares<br>
                    onde teu nome se esconde, cúmplice e eterno.<br><br>

                    Você me disse que gostava de roxo,<br>
                    e de repente o mundo inteiro<br>
                    pareceu florir nessa cor —<br>
                    como se a própria vida desejasse combinar contigo.<br>
                    Você me disse que gostava de um jogo,<br>
                    e nunca fui tão rápida<br>
                    em aprender algum novo comando,<br>
                    como se cada tecla fosse uma chance de te alcançar.<br>
                    Você me disse que gostava de praia,<br>
                    e o mar deixou de ser abismo:<br>
                    transformou-se em convite, em abraço, em canto,<br>
                    e a areia que antes ferira meus pés<br>
                    tornou-se tapete macio, quase sagrado.<br><br>

                    Você me disse que gostava de pudim,<br>
                    e até a calda de açúcar cintilou como ouro derretido.<br><br>

                    Aprendi, amando você,<br>
                    que a felicidade também sabe escrever poemas.<br>
                    Que um amor leve<br>
                    pode ser vasto como o céu.<br>
                    Que um amor firme<br>
                    pode tocar a alma com mãos de seda.<br>
                    Que um amor verdadeiro<br>
                    transforma o mundo inteiro<br>
                    em pequenos milagres cotidianos.<br><br>

                    E assim compreendi<br>
                    que a maior obra da minha vida<br>
                    não é o que deixo no papel,<br>
                    mas o que vivo ao teu lado.<br><br>

                    E tudo se resume a isto,<br>
                    simples, eterno, inabalável:<br><br>

                    eu te amo.<br>
                </p>
                <!-- LINK PARA A PLAYLIST NO SPOTIFY -->
                <p><a href="https://open.spotify.com/playlist/3kNGCbz9RdtJGJJfqnGxPz?si=iWgFltAtTk6J8Bk_LlcUSA" target="_blank" class="spotify-link">[Ouça nossa playlist no Spotify 💜]</a></p>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const startDate = <?php echo $startDate; ?> * 1000;

        function atualizarContador() {
            const now = Date.now();
            let diff = now - startDate;

            let segundos = Math.floor(diff / 1000);
            let minutos = Math.floor(segundos / 60);
            let horas = Math.floor(minutos / 60);
            let dias = Math.floor(horas / 24);

            let anos = Math.floor(dias / 365);
            dias %= 365;

            let meses = Math.floor(dias / 30);
            dias %= 30;

            horas %= 24;
            minutos %= 60;
            segundos %= 60;

            document.getElementById("contador").innerHTML =
                `${anos} anos, ${meses} meses, ${dias} dias, ${horas} horas, ${minutos} minutos e ${segundos} segundos`;
        }

        atualizarContador();
        setInterval(atualizarContador, 1000);
    </script>

</body>

</html>