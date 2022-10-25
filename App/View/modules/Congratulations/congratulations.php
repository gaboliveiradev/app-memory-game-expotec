<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <title>Yu-Gi-Oh Memory Game | Congratulations</title>

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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Jogar Novamente
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Você tem certeza que deseja continuar?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Você irá jogar novamente com o username <b>"<?= $obj->username ?></b>". Caso deseje trocar de username clique em <i>"Fechar"</i> e logo em seguinda em <i>"Voltar ao Menu"</i>.<br><br> <b>Atenção</b>, seu <b>record</b> atual será <b>resetado</b>!
                  </div>
                  <div class="modal-footer">
                    <a href="/game?id_player=<?= $obj->id ?>" class="btn btn-success">Confirmar</a>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
            <a href="/login" type="button" class="btn btn-danger">Voltar ao Menu</a>
          </div>
        </div>
    </section>

<?php include "./View/includes/js_config.php" ?>
</body>
</html>