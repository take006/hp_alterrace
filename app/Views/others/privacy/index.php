<?php
include_once dirname(__DIR__, 4) . '/config/config.php';
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__) . '/../../../');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プライバシーポリシー | アルテラス株式会社</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/color.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/default.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/element.css">
</head>
<body>
  <?php
    // その後、BASE_PATH を使ったファイルのインクルード
    include BASE_PATH . 'includes/header.php';
  ?>
  <main>
    <div class="page-title-wrapper">
      <h1 class="main-title">プライバシーポリシー</h1>
      <p>privacy policy</p>
    </div>
    <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>index.php">ホーム</a></li>
      <li>プライバシーポリシー</li>
    </ol>
    <div class="empty-box"></div>
    <div class="main-wrapper">
      <h3>プライバシーポリシー</h3>
      <p>アルテラス株式会社（以下、「当社」といいます。）は、当社のウェブサイト（<a href="https://alterrace.co.jp">https://alterrace.co.jp</a>、以下「本サイト」といいます。）をご利用いただくお客様の個人情報を適切に取り扱うことを重要な責務と認識し、以下のとおりプライバシーポリシー（以下、「本ポリシー」といいます。）を定めます。</p>

      <h4>1. 収集する個人情報</h4>
      <p>当社は、本サイトのご利用に際し、以下の個人情報を収集することがあります。</p>
      <ul>
          <li>名前</li>
          <li>メールアドレス</li>
          <li>住所</li>
          <li>電話番号</li>
          <li>アクセスログ（IPアドレス、ブラウザの種類、閲覧履歴等）</li>
      </ul>

      <h4>2. 個人情報の利用目的</h4>
      <p>当社は、取得した個人情報を以下の目的で利用いたします。</p>
      <ul>
          <li>お問い合わせ対応</li>
          <li>サービス提供および運営</li>
          <li>マーケティング活動（サービス改善、利用状況の分析等）</li>
      </ul>

      <h4>3. 個人情報の第三者提供について</h4>
      <p>当社は、法令に基づく場合を除き、お客様の同意なく第三者に個人情報を提供することはありません。</p>
      <h4>4. 個人情報の管理</h4>
      <p>当社は、お客様の個人情報を適切に管理し、外部への不正アクセス、紛失、破損、改ざん、漏洩等を防止するために、以下の安全対策を講じます。</p>
      <ul>
          <li>SSL暗号化による通信の保護</li>
          <li>個人情報の適切な管理体制の構築</li>
      </ul>

      <h4>5. クッキー（Cookie）およびトラッキング技術の使用</h4>
      <p>当社は、本サイトの利便性向上および利用状況の分析のためにGoogle Analyticsを使用しております。Google Analyticsに関する詳細やオプトアウト（拒否）方法については、<a href="https://policies.google.com/privacy" target="_blank">Googleのプライバシーポリシー</a>をご参照ください。</p>
      <h4>6. 個人情報に関するお問い合わせ</h4>
      <p>個人情報に関するお問い合わせや開示・訂正・削除のご希望がある場合は、以下の連絡先までご連絡ください。</p>
      <p><strong>アルテラス株式会社</strong><br>
      住所：<br>
      電話番号：<br>
      メールアドレス：</p>

      <h4>7. プライバシーポリシーの変更</h4>
      <p>当社は、法令の改正や事業の変更等に伴い、本ポリシーを予告なく変更することがあります。変更後のプライバシーポリシーは、本サイトに掲載した時点で効力を生じるものとします。</p>
      <p><strong>制定日：</strong> 2025年3月16日<br>
      <strong>最終改定日：</strong> 2025年3月16日</p>
    </div>
    <div class="empty-box"></div>
  </main>
  <?php
    include BASE_PATH . 'includes/footer.php';
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>