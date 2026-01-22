<?php
include_once dirname(__DIR__) . '/config/config.php';
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__) . '/../../../');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会社概要</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/element.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/link.css"">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/gaiyou.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/table.css">
</head>
<body>
  <?php
    // その後、BASE_PATH を使ったファイルのインクルード
    include BASE_PATH . 'includes/header.php';
  ?>
  <main>
    <div class="page-title-wrapper">
      <h1 class="main-title">会社概要</h1>
      <p>Company Overview</p>
    </div>
    <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>index.php">ホーム</a></li>
      <li><a href="<?= BASE_URL ?>app/Views/company/index.php">COMPANY</a></li>
      <li>会社概要</li>
    </ol>
    <div class="main-wrapper"></div>
    <div class="table-wrapper">
      <table>
        <tbody>
          <tr>
            <th>商号・会社名</th>
            <td>アルテラス株式会社</td>
          </tr>
          <tr>
            <th>本社所在地</th>
            <td>〒631-0812<br>奈良県奈良市富雄元町1丁目22-12　タワーア・ラ・モード305</td>
          </tr>
          <tr>
            <th>創業</th>
            <td>平成13年5月</td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>1,800万円</td>
          </tr>
          <tr>
            <th>代表取締役</th>
            <td>立花 陽二</td>
          </tr>
          <tr>
            <th>役員</th>
            <td>取締役 望月 寿生<br>取締役 中谷 将志<br>監査役 滝野 晶彦
            </td>
          </tr>
          <tr>
            <th>従業員数</th>
            <td>18名</td>
          </tr>
          <tr>
            <th>認定・許可</th>
            <td>一般労働者派遣業免許</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>セールスプロモーション、人材派遣業、教育・コンサルティング　など
            </td>
          </tr>
          <tr>
            <th>営業品目</th>
            <td>健康食品・自然食品・健康器具・その他健康関連商品</td>
          </tr>
          <tr>
            <th>取引先銀行</th>
            <td>三井住友銀行 奈良支店<br>南都銀行 奈良支店<br>大和信用金庫 大宮支店</td>
          </tr>
          <tr>
            <th>主要取引先</th>
            <td>上新電機㈱
              <br>㈱ヒト・コミュニケーションズ
              <br>関西ビジネスインフォメーション㈱
              <br>丸紅食糧㈱
              <br>兼松コミュニケーションズ㈱
              <br>㈱タキノトレーディング
              <br>(公社)日本・インドネシア経済協力事業協会
              <br>(福)壷阪寺聚徳会
              <br>(医)健和会
              <br>P.T JIAEC その他
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <section id="access">
      <div class="access-wrapper">
        <div class="a-text-box">
          <h2 class="sectionTitle">所在地</h2>
          <p>ACCEESS</p>
        </div>
      </div>
      <div class="inframe-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.4347921250983!2d135.73154398607593!3d34.69421190310338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600123433154945d%3A0x51c15e434a8f3d87!2z44CSNjMxLTAwNzgg5aWI6Imv55yM5aWI6Imv5biC5a-M6ZuE5YWD55S677yR5LiB55uu77yS77yS4oiS77yR77ySIOOCv-ODr-ODvCDjgqLjg7vjg6njg7vjg6Ljg7zjg4kgMzA1!5e0!3m2!1sja!2sjp!4v1728049391566!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
    <div class="empty-box"></div>
  </main>
  <?php
    include BASE_PATH . 'includes/footer.php';
  ?>
</body>
</html>