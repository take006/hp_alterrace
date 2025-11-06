<?php
  include_once dirname(__DIR__, 3) . '/config/config.php'; 
?>

<?php
session_start();
$errorMessage = $_SESSION['error_message'] ?? '不明なエラーが発生しました。';
unset($_SESSION['error_message']); // エラーメッセージを一度表示したら削除
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>エラー</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/element.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/link.css"">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/confirm.css">
</head>
<body>
  <main>
    <h1>エラーが発生しました</h1>
    <p><?php echo htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8'); ?></p>
    <div class="btnBox">
      <button><a href="<?= BASE_URL ?>app/view/contact/form.php">お問い合わせフォームへ戻る</a></button>
    </div>
  </main>
</body>
</html>
