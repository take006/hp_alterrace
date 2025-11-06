<?php
  include_once dirname(__DIR__, 4) . '/config/config.php'; 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>沿革</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/element.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/link.css"">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/ennkaku.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/subpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <?php
    // その後、BASE_PATH を使ったファイルのインクルード
    include BASE_PATH . 'includes/header.php';
  ?>
  <main>
    <div class="page-title-wrapper">
      <h1 class="main-title">沿革</h1>
      <p>History</p>
    </div>
    <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>index.php">ホーム</a></li>
      <li><a href="<?= BASE_URL ?>app/views/company/index.php">COMPANY</a></li>
      <li>沿革</li>
    </ol>
    <div class="table-wrapper">
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">平成13年5月</th>
            <td>有限会社フレンズTNTを奈良県奈良市に起業</td>
          </tr>
          <tr>
            <th scope="row">平成16年9月</th>
            <td>アルテラス株式会社に改組。資本金1,000万円に増資</td>
          </tr>
          <tr>
            <th scope="row">平成26年6月</th>
            <td>特定労働者派遣業届受理</td>
          </tr>
          <tr>
            <th scope="row">平成26年6月</th>
            <td>資本金1,800万円に増資</td>
          </tr>
          <tr>
            <th scope="row">平成30年3月</th>
            <td>一般労働者派遣業免許取得</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
  <?php
    include BASE_PATH . 'includes/footer.php';
  ?>
</body>
</html>