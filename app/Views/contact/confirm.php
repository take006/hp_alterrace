<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once dirname(__DIR__) . '/config/config.php';
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__) . '/../../');
}
include_once BASE_PATH . 'app/DefaultInit.php';
include_once BASE_PATH . 'app/SessionLifeTime.php';
include_once BASE_PATH . 'includes/functions.php';


$err =[];
if(!$companyName = filter_input(INPUT_POST, 'companyName')){
    $err[] = "会社名を入力してください";
}
if(!$title = filter_input(INPUT_POST, 'title')){
    $err[] = "タイトルを入力してください";
}
if(!$lastName = filter_input(INPUT_POST, 'lastName')){
    $err[] = "姓を入力してください";
}
if(!$firstName = filter_input(INPUT_POST, 'firstName')){
    $err[] = "名を入力してください";
}
if(!$email = filter_input(INPUT_POST, 'email')){
    $err[] = "メールアドレスを入力してください";
}
if(!$phoneNumber = filter_input(INPUT_POST, 'phoneNumber')){
    $err[] = "電話番号を入力してください";
}
if(!$message = filter_input(INPUT_POST, 'message')){
    $err[] = "内容を入力してください";
}

$_SESSION['title'] = $title;
$_SESSION['companyName'] = $companyName;
$_SESSION['lastName'] = $lastName;
$_SESSION['firstName'] = $firstName;
$_SESSION['email'] = $email;
$_SESSION['phoneNumber'] = $phoneNumber;
$_SESSION['message'] = $message;

if(count($err)>0){
    $_SESSION['err'] = $err;
    header("Location: ../");
    exit();
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>確認画面</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/element.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/confirm.css">
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
  <h1 class="confirm-title">確認画面</h1>

  <form action="<?= BASE_URL ?>app/Views/contact/send.php" method="post" class="confirm-form">

    <!-- 会社名 -->
    <section class="confirm-box">
      <div class="confirm-label">会社名</div>
      <div class="confirm-value">
        <p><?= htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8') ?: '—' ?></p>
      </div>
    </section>

    <!-- 件名 -->
    <section class="confirm-box">
      <div class="confirm-label">件名</div>
      <div class="confirm-value">
        <p><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?: '—' ?></p>
      </div>
    </section>

    <!-- 姓 -->
    <section class="confirm-box">
      <div class="confirm-label">姓</div>
      <div class="confirm-value">
        <p><?= htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') ?: '—' ?></p>
      </div>
    </section>

    <!-- 名 -->
    <section class="confirm-box">
      <div class="confirm-label">名</div>
      <div class="confirm-value">
        <p><?= htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') ?: '—' ?></p>
      </div>
    </section>

    <!-- メールアドレス -->
    <section class="confirm-box">
      <div class="confirm-label">メールアドレス</div>
      <div class="confirm-value">
        <p><?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?: '—' ?></p>
      </div>
    </section>

    <!-- 電話番号 -->
    <section class="confirm-box">
      <div class="confirm-label">電話番号</div>
      <div class="confirm-value">
        <p><?= htmlspecialchars($phoneNumber, ENT_QUOTES, 'UTF-8') ?: '—' ?></p>
      </div>
    </section>

    <!-- お問い合わせ内容 -->
    <section class="confirm-box">
      <div class="confirm-label">お問い合わせ内容</div>
      <div class="confirm-value">
        <p><?= nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) ?: '—' ?></p>
      </div>
    </section>

    <!-- プライバシー文と同意は form.php 側でチェック済みの想定 -->
    <div class="confirm-buttons">
      <button type="button" onclick="history.back();" class="btn--secondary">修正する</button>
      <input type="submit" value="送信する" class="btn--primary">
    </div>
  </form>
  </main>
    <?php include BASE_PATH . 'includes/footer.php' ?>
</body>
</html>