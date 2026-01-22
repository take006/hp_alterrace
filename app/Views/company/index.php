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
        <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>index.php">ホーム</a></li>
      <li>COMPANY</li>
    </ol>
    <div class="page-title-wrapper">
      <h1 class="main-title">COMPANY</h1>
      <p>会社概要</p>
    </div>

    <div class="empty-box"></div>
    <section id="company-box-wrapper">
      <div class="company-card">
        <a href="<?= BASE_URL ?>app/Views/company/gaiyou/index.php">
          <span class="card-title">会社概要</span>
          <span class="card-arrow">›</span>
        </a>
      </div>
      <div class="company-card">
        <a href="<?= BASE_URL ?>app/Views/company/daihyou/index.php">
          <span class="card-title">代表挨拶</span>
          <span class="card-arrow">›</span>
        </a>
      </div>
      <div class="company-card">
        <a href="<?= BASE_URL ?>app/Views/company/rinenn/index.php">
          <span class="card-title">企業理念</span>
          <span class="card-arrow">›</span>
        </a>
      </div>
      <div class="company-card">
        <a href="<?= BASE_URL ?>app/Views/company/ennkaku/index.php">
          <span class="card-title">沿革</span>
          <span class="card-arrow">›</span>
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