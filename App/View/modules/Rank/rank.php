<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
    <?php include "./View/includes/css_config.php" ?>
    <link rel="stylesheet" href="../../../View/assets/css/rank.css">
    <title>Yu-Gi-Oh Memory Game | Rank</title>
</head>
<body>
    <section>
        <h1 class="text-center">🏆 Rank Memory Game</h1>
    </section>
    <section>
        <p class="text-center">Última atualização do rank em <b><script>document.write(new Date())</script></b></p>
    </section>
    <section>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Posição</th>
              <th scope="col">Username</th>
              <th scope="col">Tempo</th>
              <th scope="col">Tentativas</th>
            </tr>
          </thead>
          <tbody>
            <?php $pos = 1; ?>
            <?php foreach($arr_rank as $item): ?>
              <?php
                $color_row = ($item->id == $last_id->id) ? "table-warning" : "";
                if($pos == 1) {
                  $medal = "🥇";
                } else if($pos == 2) {
                  $medal = "🥈";
                } else if ($pos == 3) {
                  $medal = "🥉";
                } else {
                  $medal = "🏅";
                }
              ?>
              <tr class="<?= $color_row ?>">
                <th scope="row"><?= $medal ?> <?= $pos ?></th>
                <td><?= $item->username ?></td>
                <td><?= $item->time ?> segundos</td>
                <td><?= $item->tentativas ?>x</td>
              </tr>
              <?php $pos++ ?>
            <?php endforeach; ?>
          </tbody>
        </table>
    </section>
    
<?php include "./View/includes/js_config.php" ?>
</body>
</html>