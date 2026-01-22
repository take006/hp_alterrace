<?php
include_once dirname(__DIR__) . '/config/config.php';
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__) . '/../../');
}
include_once BASE_PATH . 'config/database.php'; 

// ニュース詳細取得
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$pdo = getPDO();
$sql = "SELECT date, title, content, tags FROM news WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$news = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$news) {
    die("ニュースが見つかりません");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($news['title']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/element.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/link.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/news.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/news_detail.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
</head>
<body>
  <?php
    // その後、BASE_PATH を使ったファイルのインクルード
    include BASE_PATH . 'includes/header.php';
  ?>
  <main>
    <div class="page-title-wrapper">
      <h1 class="main-title">NEWS</h1>
      <p>お知らせ</p>
    </div>
    <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>public/index.php">ホーム</a></li>
      <li><a href="<?= BASE_URL ?>app/Views/news/index.php">ニュース</a></li>
      <li><?= htmlspecialchars($news['title']) ?></li>
    </ol>
    <div class="empty-box"></div>
    <div class="main-wrapper">
        <h1 class="news-title"><?= htmlspecialchars($news['title']) ?></h1>
        <div class="news-tags"><?= htmlspecialchars($news['tags']) ?></div>
        <div class="news-date"><?= date('Y年n月j日', strtotime($news['date'])) ?></div>
        <div class="news-content"><?= nl2br(htmlspecialchars($news['content'])) ?></div>
    </div>
    <div class="news_btn">
      <a href="<?= BASE_URL ?>app/Views/news/index.php" class="gradient_button middle_button">
        <span class="btnText">ニュース一覧へ</span>
      </a>
    </div>
  </main>
  <?php
    include BASE_PATH . 'includes/footer.php';
  ?>
</body>
</html>
