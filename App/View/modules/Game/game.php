<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./../../../View/Assets/css/reset.css">
  <link rel="stylesheet" href="../../../../View/Assets/css/game.css">
  <link rel="stylesheet" href="../../../View/Assets/images/">

  <script defer src="./../../../View/Assets/js/game.js"></script>

  <title>Expotec Jahu Memory Game</title>
</head>
<body>

  <main>
    <header>
      <span class="player"></span>
      <form>
        <input class="id" type="hidden" value="<?= $_GET["id_player"] ?>" />
      </form>
      <span>Tentativas: <span class="tentativas">0</span></span>
      <span>Tempo: <span class="timer">00</span></span>
    </header>
  
    <div class="grid"></div>
  </main>

</body>
</html>
