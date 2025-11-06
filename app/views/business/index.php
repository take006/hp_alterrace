<?php
  include_once dirname(__DIR__,3) . '/config/config.php'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSINESS</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/element.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/link.css"">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/business.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <?php
    // その後、BASE_PATH を使ったファイルのインクルード
    include BASE_PATH . 'includes/header.php';
  ?>
  <main>
    <div class="page-title-wrapper">
      <h1 class="main-title">BUSINESS</h1>
      <p>事業内容</p>
    </div>
    <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>public/index.php">ホーム</a></li>
      <li>BUSINESS</li>
    </ol>
    <div class="empty-box"></div>
    <!-- 新レイアウト -->
    <div class="main-wrapper">
    <h3>はじめに</h3>
    <p>
日本は現在、少子高齢化が加速する中で、労働市場における「人材不足」や「仕事とスタッフのミスマッチ」が深刻化しています。
そのような社会背景のもと、アルテラス株式会社は人材と現場の課題解決に取り組む企業として、地域社会とクライアント様の発展に貢献してまいりました。
古都・奈良の地から「人にやさしく」をモットーに、これからも質の高いサービスをお届けしてまいります。</p>
    </div>
    <div class="main-wrapper">
        <h3>私たちの想い</h3>
        <p>私たちは、クライアント様のニーズに応じた最適な人材の提供と、現場での実践的な課題解決を得意としています。
        ともに学び、共に成長する――そんなパートナーでありたいと考えています。</p>
      </div>
    <div class="business-box-wrapper">
      <div class="business-box">
        <div class="svg-icon">
          <img src ="<?= BASE_URL ?>app/views/business/3208_color.svg" alt="call-center"/>
        </div>
        <h4>人材派遣・業務支援サービス</h4>
        <p>私たちは、販売・営業といった人的依存度の高い業務を中心に、最適な人材を提供し、現場の課題解決を支援しています。</p>
        <!-- <ul>
          <li>売り場の人手不足への対応</li>
          <li>店舗維持・販売力の向上</li>
          <li>現場業務の効率化・改善</li>
          <li>セールスプロモーションの最適化と実行支援</li>
        </ul> -->
        <p>特に私たちの強みは、現場での情報収集・活用力と、少人数精鋭による迅速で柔軟な対応です。
        その場に応じた判断力と機動力で、セールス活動の成果につなげていきます。</p>
      </div>
      <div class="business-box">
        <div class="svg-icon">
          <img src ="<?= BASE_URL ?>app/views/business/3137_color.svg" alt="call-center"/>
        </div>
        <h4>セールスプロモーション</h4>
        <p>特に私たちの強みは、現場での情報収集・活用力と、少人数精鋭による迅速で柔軟な対応です。
        その場に応じた判断力と機動力で、セールス活動の成果につなげていきます。</p>
      </div>
      <div class="business-box">
        <div class="svg-icon">
          <img src ="<?= BASE_URL ?>app/views/business/21253_color.svg" alt="call-center"/>
        </div>
        <h4>コールセンター運営・業務請負</h4>
        <p>当社は、コールセンター業務の請負・運営にも対応しています。
        経験豊富なスタッフによる対応体制と、インバウンド・アウトバウンド問わず柔軟なサービス設計により、業務の効率化と顧客満足度の向上を実現します。</p>
      </div>
      <div class="business-box">
        <div class="svg-icon">
          <img src ="<?= BASE_URL ?>app/views/business/9539_color.svg" alt="call-center"/>
        </div>
        <h4>外国人技能実習生への日本語教育</h4>
        <p>日本国内の実習先で勤務する外国人技能実習生に対し、日本語教育を提供しています。
        業務に必要な語学力だけでなく、日本の文化・マナーも含めて指導することで、実習先との良好なコミュニケーションと職場定着を支援します。</p>
      </div>
    </div>
    <!-- <section id="business">
      <div class="business-sub">
        <ul>
          <li>
            <a href="#">
              <div class="business-img-text">
                <h4><b>セールスプロモーション</b>Slaes Promotion</h4>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="business-img-text">
                <h4><b>EMPOLOYMENT AGENCY</b>モバイル販売スタッフ・コールセンターへの人材派遣</h4>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="business-img-text">
                <h4><b>EDUCATION&CONSULTING</b>EPA（経済連携協定）及び技能実習生への日本語教育</h4>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section> -->
    <div class="empty-box"></div>
  </main>
  <?php
    include BASE_PATH . 'includes/footer.php';
  ?>
</body>
</html>