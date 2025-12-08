<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once dirname(__DIR__, 3) . '/config/config.php'; 
include_once dirname(__DIR__, 3) . '/app/DefaultInit.php';
include_once dirname(__DIR__, 3) . '/app/SessionLifeTime.php';
include_once dirname(__DIR__, 3) . '/includes/functions.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// サーバー名で環境を判定
$isLocal = ($_SERVER['SERVER_NAME'] === 'localhost' || strpos($_SERVER['SERVER_NAME'], '127.0.0.1') !== false);

// autoloadの読み込み
if ($isLocal) {
    // ローカル (例: XAMPP)
    require dirname(__DIR__, 3) . '/vendor/autoload.php';
} else {
    // 本番 (例: StarServer)
    require dirname(__DIR__, 4) . '/vendor/autoload.php';
}



// セッションからデータを取得
$title = $_SESSION['title'] ?? '';
$companyName = $_SESSION['companyName'] ?? '';
$firstName = $_SESSION['firstName'] ?? '';
$lastName = $_SESSION['lastName'] ?? '';
$phoneNumber = $_SESSION['phoneNumber'] ?? '';
$email = $_SESSION['email'] ?? '';
$message = $_SESSION['message'] ?? '';
$_SESSION = array();


// メール送信の設定のためインスタンス化
$mail = new PHPMailer(true);

try {
    $mail->CharSet = 'UTF-8'; // 文字化け対策でメソッドを呼び出す
    $mail->Encoding = 'base64';

    if ($isLocal) {
        // XAMPP（ローカル環境）: Gmail の SMTP を利用
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'take088917761@gmail.com';  // 送信元Gmailアドレス
        $mail->Password   = 'kojlqraouovtibzy';  // Gmailのアプリパスワード
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->setFrom('take088917761@gmail.com', 'アルテラス株式会社');
    } else {
        // Xserver（本番環境）: Xserver の `mail()` 関数を利用
        $mail->isMail();
        // Xserver のドメインメールを使用
        $mail->setFrom('admin@xs342072.xsrv.jp', 'お問い合わせフォーム'); 
    }

    // 宛先
    $mail->addAddress('take088917761@gmail.com', '管理者');

    // メール内容
    $mail->Subject = "=?UTF-8?B?" . base64_encode('HPコンタクトフォーム: ' . $title) . "?="; // 件名のエンコード
    $mail->Body ="■ 会社名\n$companyName\n\n"
            . "■ 姓\n$lastName\n\n"
            . "■ 名\n$firstName\n\n"
            . "■ メール\n$email\n\n"
            . "■ 電話番号\n$phoneNumber\n\n"
            . "■ お問い合わせ内容\n$message\n";


    // メール送信メソッド
    if ($mail->send()) {
        header("Location: thanks.php");
        exit;
    } else {
        header("Location: error.php?message=" . urlencode('メールの送信に失敗しました。'));
        exit;
    }
} catch (Exception $e) {
    header("Location: error.php?message=" . urlencode("メール送信に失敗しました: " . $mail->ErrorInfo));
    exit;
}
