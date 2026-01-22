<?php
include_once dirname(__DIR__) . '/config/config.php';
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__) . '/../../');
}
include_once BASE_PATH . 'config/database.php'; 

$pdo = getPDO();
// ニュース一覧取得
$sql = "SELECT id, date, title, content, tags FROM news ORDER BY date DESC";
$stmt = $pdo->query($sql);
$newsList = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/element.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/link.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/news.css">

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
      <li>NEWS</li>
    </ol>
    <div class="empty-box"></div>
      <!-- ここからNews -->
    <section id="news">
      <div class="news-wrapper">
      <div class="news-container">
        <h2>ニュース一覧</h2>
        <ul>
          <?php foreach ($newsList as $news): ?>
            <div class="news-item">
                <div class="upper-container">
                    <div class="news-date">
                        <?= date('Y年n月j日', strtotime($news['date'])) ?>
                    </div>
                    <?php
                        $tags = explode(',', $news['tags']);
                        foreach ($tags as $tag):
                        $tag = trim($tag);
                    ?>
                        <span class="news-tag"><?= htmlspecialchars($tag) ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="news-title">
                    <a href="<?= BASE_URL ?>app/Views/news/news_detail.php?id=<?= $news['id'] ?>">
                        <?= htmlspecialchars($news['title']) ?>
                    </a>
                </div>
                <div class="news-content">
                  <?= mb_strlen($news['content']) > 30 ? htmlspecialchars(mb_substr($news['content'], 0, 30)) . '…' : htmlspecialchars($news['content']) ?>
                </div>
            </div>
          <?php endforeach; ?>
        </ul>
        </div>
        <!-- <div class="news-box">
          <section id="pagenation">
            <nav aria-label="Page navigation example">
              <ul class="pagination d-flex justify-content-center">
                <li class="page-item"><a class="page-link" href="#">前</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">次</a></li>
              </ul>
            </nav>      
          </section>
        </div> -->
      </div>
    </section>
    <div class="empty-box"></div>
  </main>
  <?php
    include BASE_PATH . 'includes/footer.php';
  ?>
</body>
</html>