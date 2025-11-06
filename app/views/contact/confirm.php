<?php
  include_once dirname(__DIR__, 3) . '/config/config.php'; 
?>

<?php 
session_start(); // セッション開始

// POSTデータが送信された場合、セッションにデータを保存
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    $_SESSION['title'] = $_POST['title'];
    $_SESSION['companyName'] = $_POST['companyName'];
    $_SESSION['phoneNumber'] = $_POST['phoneNumber'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['message'] = $_POST['message'];
}

// セッションからデータを取得
$firstName = $_SESSION['firstName'] ?? '';
$lastName = $_SESSION['lastName'] ?? '';
$title = $_SESSION['title'] ?? '';
$companyName = $_SESSION['companyName'] ?? '';
$phoneNumber = $_SESSION['phoneNumber'] ?? ''; // ここでセッションから取得
$email = $_SESSION['email'] ?? '';
$message = $_SESSION['message'] ?? '';
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet"href="<?= BASE_URL ?>assets/css/color.css">
    <link rel="stylesheet"href="<?= BASE_URL ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
    <link rel="stylesheet"href="<?= BASE_URL ?>assets/css/element.css">
    <link rel="stylesheet"href="<?= BASE_URL ?>assets/css/link.css"">
    <link rel="stylesheet"href="<?= BASE_URL ?>assets/css/confirm.css">
</head>
<body>
    <?php
        // その後、BASE_PATH を使ったファイルのインクルード
        include BASE_PATH . 'includes/header.php';
    ?>
    <main>
        <h1>確認画面</h1>
        <form action="<?= BASE_URL ?>app/views/contact/send.php" method="post">
            <p><b>以下の内容で送信します。よろしいですか？</b></p>

            <div class="messageBox">
                <b>件名</b>
                <hr>
                <p><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></p>
                <b>会社名</b>
                <hr>
                <p><?= htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8') ?></p>
                <b>姓</b>
                <hr>
                <p><?= htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') ?></p>
                <b>名</b>
                <hr>
                <p><?= htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') ?></p>
                <b>メールアドレス</b>
                <hr>
                <p><?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></p>
                <b>電話番号</b>
                <hr>
                <p><?= htmlspecialchars($phoneNumber, ENT_QUOTES, 'UTF-8') ?></p>
                <b>メッセージ</b>
                <hr>
                <p><?= nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) ?></p>
                <div class="btnBox">
                    <button type="button" onclick="history.back()">戻る</button>
                    <button type="submit">送信する</button>
                </div>
            </div>
        </form>
    </main>
    <?php
        include BASE_PATH . 'includes/footer.php';
    ?>
</body>
</html>