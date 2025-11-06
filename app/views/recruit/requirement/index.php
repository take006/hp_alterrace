<?php
  include_once dirname(__DIR__, 4) . '/config/config.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>採用情報</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/element.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/requirement.css">
</head>
<body>
  <?php
    // その後、BASE_PATH を使ったファイルのインクルード
    include BASE_PATH . 'includes/header.php';
  ?>
  <main>
    <div class="page-title-wrapper">
      <h1 class="main-title">RECRUIT　Requirement</h1>
      <p>募集要項</p>
    </div>
    <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>public/index.php">ホーム</a></li>
      <li>RECRUIT</li>
    </ol>
    </div>
    <div class="empty-box"></div>
      <section id="requirement-box-wrapper">
        <div class="requirement-box">
          <a href="<?= BASE_URL ?>app/views/company/rinenn/callCenter/index.phpp">
          <img src="<?= BASE_URL ?>assets/images/other_images/recruit_woman_unsplash.avif" alt="">
          <div class="text-wrapper">
            <p><b>コールセンター</b></p>
            <span class="tag">販売</span>
            <span class="tag">接客</span>
            <span class="tag">サービス</span>
          </div>
          </a>
        </div>
        <div class="requirement-box">
        <a href="<?= BASE_URL ?>app/views/recruit/requirement/mobileShop/index.php">
          <img src="<?= BASE_URL ?>assets/images/other_images/recruit_woman_unsplash.avif" alt="">
          <div class="text-wrapper">
            <p><b>家電量販店モバイル販売</b></p>
            <span class="tag">販売</span>
            <span class="tag">接客</span>
            <span class="tag">サービス</span>
          </div>
          </a>
        </div>
      </section>
      <div class="empty-box"></div>
  </main>
  <?php
    include BASE_PATH . 'includes/footer.php';
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>