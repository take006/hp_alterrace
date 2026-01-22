<?php
include_once dirname(__DIR__) . '/config/config.php';
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__) . '/../../../');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>サイトポリシー | アルテラス株式会社</title>
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
      <h1 class="main-title">サイトポリシー</h1>
      <p>Site Policy</p>
    </div>
    <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>index.php">ホーム</a></li>
      <li>サイトポリシー</li>
    </ol>
    <div class="empty-box"></div>
    <div class="main-wrapper">
      <h3>サイトポリシー</h3>
      <hr>
      <p>アルテラス株式会社（以下、「当社」といいます。）が運営するウェブサイト（<a href="https://alterrace.co.jp">https://alterrace.co.jp</a>、以下「本サイト」といいます。）をご利用いただくにあたり、以下のサイトポリシーを定めます。本サイトを利用される際には、以下の内容をご確認ください。</p>

      <h4>1. 著作権について</h4>
      <p>本サイトに掲載されている文章、画像、動画、デザイン等（以下「コンテンツ」といいます。）の著作権は、特段の記載がない限り当社に帰属します。営利目的・非営利目的を問わず、無断での使用・複製・転載・改変等は禁止します。</p>

      <h4>2. 免責事項</h4>
      <p>当社は、本サイトに掲載する情報の正確性・最新性について細心の注意を払っておりますが、その内容の完全性を保証するものではありません。本サイトの利用により生じた損害について、当社は一切の責任を負いません。</p>
      <p>また、本サイトの運営を予告なく変更、中断、または終了することがありますので、あらかじめご了承ください。</p>

      <h4>3. リンクについて</h4>
      <p>本サイトへのリンクは、営利・非営利を問わず原則自由ですが、以下のいずれかに該当する場合はリンクをお断りします。</p>
      <ul>
          <li>当社または第三者を誹謗中傷し、信用を毀損する内容を含むサイト</li>
          <li>公序良俗に反する内容を含むサイト</li>
          <li>違法行為を助長または関与する可能性のあるサイト</li>
      </ul>

      <h4>4. 推奨環境</h4>
      <hr>
      <p>本サイトを快適にご利用いただくために、以下の環境を推奨します。</p>
      <p>PC</p>
      <ul>
          <li>Google Chrome（最新版）</li>
          <li>Mozilla Firefox（最新版）</li>
          <li>Microsoft Edge（最新版）</li>
      </ul>
      <p>スマートフォン</p>
      <ul>
          <li>iOS: Safari（最新版）</li>
          <li>Android: Google Chrome（最新版）</li>
      </ul>
      <p>推奨環境以外では正常に動作しない場合がありますので、ご了承ください。</p>

      <h4>5. 個人情報の取り扱い</h4>
      <p>本サイトで取得した個人情報の取り扱いについては、<a href="/privacy-policy">プライバシーポリシー</a>をご確認ください。</p>

      <h4>6. サイトポリシーの変更</h4>
      <p>当社は、本ポリシーを予告なく変更することがあります。変更後のポリシーは、本サイトに掲載した時点で効力を生じるものとします。</p>

      <p><strong>制定日：</strong> 2025年3月16日</p>
      <p><strong>最終改定日：</strong> 2025年3月16日</p>
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