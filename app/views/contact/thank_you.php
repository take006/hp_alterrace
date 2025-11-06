<?php
  include_once dirname(__DIR__, 3) . '/config/config.php'; 
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>お問い合わせ完了</title>
      <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/resetting.css">
      <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/header.css">
      <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/footer.css">
      <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/confirm.css">
  </head>
  <body>
    <main>
      <h1>お問い合わせを送信しました</h1>
      <p>お問い合わせありがとうございました。<br>数日以内にご連絡いたします。</p>
      <div class="btnBox">
        <button><a href="<?= BASE_URL ?>public/index.php">ホームへ戻る</a></button>
      </div>
    </main>
  </body>
</html>
