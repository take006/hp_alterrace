<?php
include_once dirname(__DIR__) . '/config/config.php';
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__) . '/../../');
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="robots" content="noindex">
      <title>お問い合わせ完了</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/element.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/thanks.css">
  </head>
  <body>
    <?php include BASE_PATH . 'includes/header.php'; ?>
    <main>
<div class="thanks-card">
  <div class="thanks-icon">✓</div>
  <h1>お問い合わせを送信しました</h1>
  <p>お問い合わせありがとうございました。<br>数日以内にご連絡いたします。</p>
  <div class="btnBox">
    <a class="btn--primary" href="<?= BASE_URL ?>index.php">ホームへ戻る</a>
  </div>
</div>
    </main>
    <?php include BASE_PATH . 'includes/footer.php'; ?>
  </body>
</html>
