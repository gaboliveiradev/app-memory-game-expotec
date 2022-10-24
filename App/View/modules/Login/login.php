<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../../../View/Assets/css/reset.css">
  <link rel="stylesheet" href="./../../../View/Assets/css/login.css">
  <?php include "./View/includes/bootstrap/css_config.php" ?>
  <script defer src="./../../../View/Assets/js/login.js"></script>

  <title>Expotec Memory Game | Login</title>
</head>
<body>
  <?php if($_SESSION['response'] != ""): ?>
    <div class="alert alert-danger text-center" role="alert"><?= $_SESSION['response'] ?></div>
  <?php endif; ?>
  
  <form class="login-form">
    <div class="login__header">
      <img src="./../../../View/Assets/images/brain.png" alt="brain icon">
      <h1>Expotec Memory Game</h1>
    </div>

    <input name="username" type="text" placeholder="Name" class="login__input">
    <button type="submit" class="login__button" disabled>Play</button>
  </form>

<?php include "./View/includes/bootstrap/js_config.php" ?>
</body>
</html>