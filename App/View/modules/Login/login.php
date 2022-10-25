<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../../../View/Assets/css/reset.css">
  <link rel="stylesheet" href="./../../../View/Assets/css/login.css">
  <?php include "./View/includes/css_config.php" ?>
  <script defer src="./../../../View/assets/js/login.js"></script>

  <title>Yu-Gi-Oh Memory Game | Login</title>
</head>
<body>
  <?php if($_SESSION['response'] != ""): ?>
    <div class="alert alert-danger text-center" role="alert"><?= $_SESSION['response'] ?></div>
  <?php endif; ?>
  
  <form class="login-form">
    <div class="login__header">
      <img src="./../../../View/Assets/images/brain.png" alt="brain icon">
      <h1>Yu-Gi-Oh Memory Game</h1>
    </div>

    <input maxlength="16" name="username" type="text" placeholder="Name" class="login__input">
    <!-- Button trigger modal -->
    <button type="button" disabled class="login__button" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Jogar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">🎲 Como Jogar?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body m-text">
          ⚠️1. Para <b>virar</b> uma carta, dê <b>dois clique</b> em cima com o mouse. <br><br>
            2. O Rank de players é gerado a partir do seu tempo para terminar o jogo, então seja rápido! <br><br>
            3. O Rank de Player poderá ser consultado no monitor ao lado. -> <br><br>
            4. Desde já pedimos desculpa por algum eventual bug em nosso jogo, estamos em beta :)
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success login__button">Começar a Jogar</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
  </form>

<?php include "./View/includes/js_config.php" ?>
</body>
</html>