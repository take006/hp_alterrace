<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once dirname(__DIR__, 3) . '/config/config.php'; 
include_once dirname(__DIR__, 3) . '/app/DefaultInit.php';
include_once dirname(__DIR__, 3) . '/app/SessionLifeTime.php';
include_once dirname(__DIR__, 3) . '/includes/functions.php';

// セッションからデータを取得
$title = $_SESSION['title'] ?? '';
$companyName = $_SESSION['companyName'] ?? '';
$firstName = $_SESSION['firstName'] ?? '';
$lastName = $_SESSION['lastName'] ?? '';
$phoneNumber = $_SESSION['phoneNumber'] ?? '';
$email = $_SESSION['email'] ?? '';
$message = $_SESSION['message'] ?? '';
$_SESSION = array();

// メール内容
$mail_subject = "【お問い合わせ内容】$title"; // 件名のエンコード
$mail_body =
    "■ 会社名\n$companyName\n\n"
    . "■ 姓\n$lastName\n\n"
    . "■ 名\n$firstName\n\n"
    . "■ メール\n$email\n\n"
    . "■ 電話番号\n$phoneNumber\n\n"
    . "■ お問い合わせ内容\n$message\n";

    // PHPMailerで使用する変数や関数をカプセル化する
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// サーバー名で環境を判定
$isLocal = ($_SERVER['SERVER_NAME'] === 'localhost' || strpos($_SERVER['SERVER_NAME'], '127.0.0.1') !== false); 
// autoloadの読み込み
if ($isLocal) { 
    // ローカル (例: XAMPP) 
    require dirname(__DIR__, 3) . '/vendor/autoload.php'; } 
    else {
         // 本番 (例: StarServer)
         require dirname(__DIR__, 3) . '/vendor/autoload.php'; 
    }

$mail = new PHPMailer(true);
$mail->CharSet = 'utf-8';

try {
    $mail->isSMTP();
    $mail->Host       = HOST_SMTP;
    $mail->SMTPAuth   = true;
    $mail->Username   = HOST_MAIL_ADDRESS;  // 送信元Gmailアドレス
    $mail->Password   = HOST_MAIL_PASSWORD;  // Gmailのアプリパスワード
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom(HOST_MAIL_ADDRESS, 'アルテラス株式会社');
    // 宛先
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $mail_subject;
    $mail->Body = nl2br($mail_body);
    $mail->AltBody = $mail_body;

    $mail->send();
    header("Location: thanks.php");
    exit;
} catch (Exception $e) {
    echo"メールを送信できませんでした：{$mail->ErrorInfo}";
    exit;
}
