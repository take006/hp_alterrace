<?php
  include_once dirname(__DIR__, 3) . '/config/config.php'; 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPANY</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/element.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/link.css"">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/company.css">
</head>
<body><?php
    // その後、BASE_PATH を使ったファイルのインクルード
    include BASE_PATH . 'includes/header.php';
  ?>
  <main>
    <div class="page-title-wrapper">
      <h1 class="main-title">COMPANY</h1>
      <p>会社概要</p>
    </div>
    <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>public/index.php">ホーム</a></li>
      <li>COMPANY</li>
    </ol>
    <div class="empty-box"></div>
    <section id="company-box-wrapper">
      <div class="company-box">
        <a href="<?= BASE_URL ?>app/views/company/rinenn/index.php">
          <img src="https://picsum.photos/1920/1080" alt="">
          <p><b>企業理念</b></p>
        </a>
      </div>
      <div class="company-box">
        <a href="<?= BASE_URL ?>app/views/company/daihyou/index.php">
          <img src="https://picsum.photos/1920/1080" alt="">
          <p><b>代表挨拶</b></p>
        </a>
      </div>
      <div class="company-box">
        <a href="<?= BASE_URL ?>app/views/company/ennkaku/index.php">
          <img src="https://picsum.photos/1920/1080" alt="">
          <p><b>沿革</b></p>
        </a>
      </div>
      <div class="company-box">
        <a href="<?= BASE_URL ?>app/views/company/gaiyou/index.php">
          <img src="https://picsum.photos/1920/1080" alt="">
          <p><b>会社概要</b></p>
        </a>
      </div>
    </section>
    <div class="empty-box"></div>
  </main>
  <?php
    include BASE_PATH . 'includes/footer.php';
  ?>
</body>
</html>