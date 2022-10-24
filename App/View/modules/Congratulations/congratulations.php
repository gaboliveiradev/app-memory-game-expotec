<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/bootstrap/css_config.php" ?>
    <title>Expotec Memory Game | Congratulations</title>

    <style>
        body {
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        section {
            width: 70vw;
            height: 50vh;
        }

        img {
            height: 70vh;
        }
    </style>
</head>

<body>
    <section>
        <div class="card mb-3">
          
          <div class="card-body">
            <h5 class="card-title text-center">🎉Parabéns, você finalizou o Expotec Memory Game🎉</h5>
            <hr>
            <span class="card-text"><strong><?= $obj->username ?>,</strong> você completou o nosso da desafio em ⌛️<strong><?= $obj->time ?></strong> segundos, realizando apenas 🎯<strong><?= $obj->tentativas ?></strong> tentativas!</span>
            <hr>
            <span><strong>📋 Informações do Player:</strong></span> <br><br>
            <span><strong>🧞‍♂️ Player:</strong> <?= $obj->username ?></span> <br>
            <span><strong>⏳ Tempo:</strong> <?= $obj->time ?> segundos</span> <br>
            <span><strong>🎯 Tentativas:</strong> <?= $obj->tentativas ?>x</span>
            <hr>
            <a href="/game?id_player=<?= $obj->id ?>" type="button" class="btn btn-secondary">Jogar Novamente</a>
            <button type="button" class="btn btn-success">Rank</button>
            <a href="/login" type="button" class="btn btn-danger">Voltar ao Menu</a>
          </div>
        </div>
    </section>

<?php include "./View/includes/bootstrap/js_config.php" ?>
</body>
</html>