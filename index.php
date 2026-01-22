
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// config.php を読み込む
include __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/database.php';

try {
$pdo = getPDO();
  // 最新のニュース4件を取得
$sql = "SELECT id, date, title, content, tags FROM news ORDER BY date DESC LIMIT 4";
$stmt = $pdo->query($sql);
$newsList = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "データベース接続エラー: " . $e->getMessage();
  exit;
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アルテラス株式会社</title>

  <!-- CSS（BASE_URLを適用） -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/default.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/color.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/element.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/index.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/scrollTop.css">
</head>
<body>
  <!-- ヘッダー -->
  <section id="header">
    <div id ="loading">
        <img src="alterrace/assets/images/logo.png" alt="">
    </div>
    <!-- トップへ戻るボタン -->
    <div class="pagetop">
      <a href="#" class="pagetop__link">
        <span class="pagetop__text"></span>
      </a>
    </div>
    <div id="top-slider">
      <?php
        // BASE_PATH を使ってファイルをインクルード
        include BASE_PATH . 'includes/header.php';
      ?>
      <div class="slider-container">
        <div class="slider-img active">
          <img src="assets/images/other_images/company-building-unsplash.jpg" alt="">
        </div>
        <div class="slider-img">
          <img src="assets/images/other_images/nara-Hase-m_find47.jpg" alt="">
        </div>
        <div class="slider-img">
          <img src="assets/images/other_images/nara-Okuasuka_Sky_Observatory_find47.jpg" alt="">
        </div>
        <div class="slider-img">
          <img src="assets/images/other_images/wifi_5G1449_TP_V.jpg" alt="">
        </div>
        </div>
        <div class="top-message">
          <h2><span>Enrich your life<br>
          with Technology.</span></h2>
        </div>
      </div>
    </div> 
  </section>
  <main>
    <section id="main-content" class="fadeIn">      
      <!-- ここからトップメッセージ -->
      <section id="mission">
        <div class="empty-box"></div>
        <div class="text-box-center">
          <h3>あらゆるサービスがつながる今<br>
            インタネットの<br>
            新たな可能性を追求する。
          </h3>
          <p>
            暮らしや働き方の多様化が進むニューノーマル時代において、私たちが培ってきた経験を活かし、より安心・安全で便利・快適なサービスの提供を推進していきます。</p>
        </div>
        <div class="empty-box"></div>
      </section>
      <!-- 最新ニュースを4件取得 -->
      <?php
      // BASE_PATH を使ってファイルをインクルード
      include BASE_PATH . 'includes/top_news.php';
      ?>


      <!-- ビジネス -->
      <section id="business" class="fadeIn">
        <div class="business-wrapper">
          <h2 class="sectionTitle text-center">事業内容</h2>
          <P class="sectionSubTitle text-center">BUSINESS</P>
        </div>
        <div class="main-wrapper_right">
          <div class="title-inner_right">
            <h3>人材派遣事業</h3>
            <hr>
            <p>employment agency</p>
          </div>
          <div class="content-box_right">
            <img src="assets/images/other_images/business/callcenter-img.jpg" alt="">
            <div class="text-box_right">
              <p>家電量販店のモバイル販売スタッフ及びコールセンターオペレーターのプロフェッショナル人材をクライアント様に派遣しております。</p>
              </p>
            </div>
          </div>
        </div>
        <div class="main-wrapper_left">
          <div class="title-inner">
            <h3>教育・コンサルティング事業</h3>
            <hr>
            <p>education&consulting</p>
          </div>
          <div class="content-box_left">
            <img src="assets/images/other_images/business_education_unsplash.jpg" alt="">
            <div class="text-box_left">
              <p>EPA（経済連携協定）及び技能実習生として来日したインドネシア人に対し、日本語や日本文化習得のための教育を行っております。 
              </p>
            </div>
          </div>
        </div>
        <div class="empty-box"></div>
      </section>

      <section id="company" class="fadeIn">
        <div class="company-wrapper">
          <div class="c-title-inner">
            <h2 class="sectionTitle text-center">私たちについて</h2>
            <P class="sectionSubTitle text-center">ABOUT US</P>
          </div>
          <div class="company-text-inner">
            <h3>「お客様との信頼を築くプロフェッショナル」</h3>
            <p>お客様との信頼関係を第一に考え、丁寧で親切な対応を心掛けています。通信技術の進化を取り入れた最適なソリューションを提供し、企業のビジネス成長を支援します。</p>
          </div>
        </div>
        <div class="company-container">
          <ul>
            <li><a href="<?= BASE_URL ?>app/Views/company/gaiyou/index.php"><h4>会社概要</h4></a></li>
            <li><a href="<?= BASE_URL ?>app/Views/company/daihyou/index.php"><h4>代表挨拶</h4></a></li>
            <li><a href="<?= BASE_URL ?>app/Views/company/ennkaku/index.php"><h4>沿革</h4></a></li>
          </ul>
        </div>
        <div class="empty-box"></div>
      </section>
      <section id="recruit" class="fadeIn">
        <div class="recruit-wrapper">
          <h2 class="sectionTitle text-center">採用</h2>
          <p class="sectionSubTitle text-center">RECRUIT</p>
          <div class="recruit-inner">
            <div class="recruit-img-box">
              <img src="assets/images/other_images/recruit_woman_unsplash.avif" alt="recruit_img"　class="recruit-img">
            </div>
            <div class="recruit-text-box">
              <h3 class="recruit-sub-title">「新たな挑戦を求めるあなたへ」</h3>
              <p>販売業務、コールセンター業務から教育支援まで、幅広い事業領域であなたのスキルを磨ける機会があります。多様なキャリアパスを描ける環境です。私たちと一緒に成長し、未来を創りませんか？安心して働ける環境と手厚いサポートを提供しています。新しい一歩を踏み出すあなたを応援します。<br>弊社では事業拡大に伴い、共に歩む仲間を募集しています。</p>
            </div>
          </div>
          <div class="recruit-btn-box">
            <a href="<?= BASE_URL ?>app/Views/recruit/index.php" class="gradient_button large_button">
              <span class="btnText">採用ページへ</span>
            </a>
          </div>
        </div>
      </section>
      <div class="empty-box"></div>
    </section>
  </main>
 <!-- フッター -->
 <?php
  // BASE_PATH を使ってファイルをインクルード
  include BASE_PATH . 'includes/footer.php';
  ?>
  <script src="<?= BASE_URL ?>assets/js/main.js"></script>
  <script src="<?= BASE_URL ?>assets/js/scrollTop.js"></script>
</body>
</html>
