<?php
  include_once dirname(__DIR__, 3) . '/config/config.php'; 
?>


<?php
session_start();
$companyName = $_SESSION['companyName'] ?? ''; // セッションから名前を取得
$title = $_SESSION['title'] ?? ''; // セッションから名前を取得
$lastName = $_SESSION['lastName'] ?? ''; // セッションから名前を取得
$firstName = $_SESSION['firstName'] ?? ''; // セッションから名前を取得
$email = $_SESSION['email'] ?? ''; // セッションからメールを取得
$phoneNumber = $_SESSION['phoneNumber'] ?? ''; // セッションからメールを取得
$message = $_SESSION['message'] ?? ''; // セッションからメッセージを取得
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/color.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/element.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/link.css"">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/contact.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/form.css">
</head>
<body>
  <?php
    // その後、BASE_PATH を使ったファイルのインクルード
    include BASE_PATH . 'includes/header.php';
  ?>
  <main>
    <div class="page-title-wrapper">
      <h1 class="main-title">CONTACT</h1>
      <p>お問い合わせ</p>
    </div>
    <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>public/index.php">ホーム</a></li>
      <li>CONTACT</li>
    </ol>
    <div class="main-wrapper">
      <h1>入力フォーム</h1>
      <p>企業担当者様の問い合わせに関してましては、下記フォームよりお願いいたします。
        <br>ご返信まで数日を要することがございます。
      </p>
    </div>
    <section id="input-area">
      <form action="<?= BASE_URL ?>app/views/contact/confirm.php" method="post">
        <div class="input-wrapper">
          <label for="name" class="label-item">会社名</label>
          <input class="input-item" type="text" name="companyName" value="<?= htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8') ?>" required placeholder="アルテラス株式会社">
        </div>
        <div class="input-wrapper">
          <label for="name" class="label-item">件名</label>
          <input class="input-item" type="text" placeholder="件名を入力してください" name="title" id="name" value="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>" required>
        </div>
        <div class="input-wrapper">
          <label for="name" class="label-item">姓</label>
          <input class="input-item" type="text" id="name" name="lastName" value="<?= htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') ?>" required placeholder="山田">
        </div>
        <div class="input-wrapper">
          <label for="name" class="label-item">名</label>
          <input class="input-item" type="text" id="name" name="firstName" value="<?= htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') ?>" required placeholder="太郎">
        </div>
        <div class="input-wrapper">
          <label for="name" class="label-item">メールアドレス</label>
          <input class="input-item" type="email" placeholder="sample@sample.com" name="email" id="name" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>" required>
        </div>
        <div class="input-wrapper">
          <label for="name" class="label-item-any">電話番号</label>
          <input class="input-item" type="tel" placeholder="000-0000-0000" name="phoneNumber" id="name" value="<?= htmlspecialchars($phoneNumber, ENT_QUOTES, 'UTF-8') ?>" required>
        </div>
        <div class="input-wrapper">
          <label for="name" class="label-item">お問い合わせ内容</label>
          <textarea name="message" type="text" class="input-textarea" placeholder="内容を入力してください" required><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></textarea>
        </div>
        <p>ご登録いただいた個人情報は当社個人情報の取扱いにより安全に管理いたします。
個人情報の取扱いについてにご同意のうえ、ご登録をお願い致します。</p>
        <p>当社個人情報の取扱いに同意する</p>
        <p><input type="checkbox" name="privacy" id="privacy">
        <a href="<?= BASE_URL ?>app/views/others/privacy/index.php" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>
        に同意する</p>
        <!-- 確認ボタン -->
        <button class="submit-btn" type="submit">入力内容を確認する</button>
      </form>
    </section>
  </main>
  <?php
    include BASE_PATH . 'includes/footer.php';
  ?>
</body>
</html>