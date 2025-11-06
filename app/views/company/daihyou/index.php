<?php
  include_once dirname(__DIR__, 4) . '/config/config.php'; 
?>

<!DOCTYPE html>
<html lang="ja>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>代表挨拶</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/daihyou.css">
</head>
<body>
  <?php
    // その後、BASE_PATH を使ったファイルのインクルード
    include BASE_PATH . 'includes/header.php';
  ?>
  <main>
    <div class="page-title-wrapper">
      <h1 class="main-title">代表挨拶</h1>
      <p>Top Message</p>
    </div>
    <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>index.php">ホーム</a></li>
      <li><a href="<?= BASE_URL ?>app/views/company/index.php">COMPANY</a></li>
      <li>代表挨拶</li>
    </ol>
    <div class="empty-box"></div>
    <div class="main-wrapper">
      <h3>ご挨拶</h3>
      <p>
弊社は「大和は国のまほろば」と呼ばれる奈良で創業して２３年が経ちました。23年の実績を誇る当社は、シルクロードの終着点である奈良の地に根ざしています。歴史的にも多様な文化が交錯したこの場所で、人と地域のつながりを大切にし、人材派遣業を通じてその精神を受け継いでいます。
      </p>
      <p>特に教育に力を注いでおり、研修などを通し、人材育成に努めてまいりました。また一方ではグローバル化の観点から、13年以上にわたりインドネシア人技能実習生への日本語教育を提供してまいりました。
        この23年間で、日本は少子超高齢社会となり、社会のニーズは急速に変化しています。こうした時代の変化に対応しながら、当社は常に前進し続けることを目指し、地域社会と共に成長し続けることを約束します。
      </p>
      <p>
        また、後藤新平の名言「財を遺すは下、事業を遺すは中、人を遺すは上なり。されど財無くんば事業保ち難く、事業無くんば人育ち難し」からもわかるように、当社は人材育成に力を入れています。この理念のもと、皆様の信頼に応えるサービスを提供してまいります。
        最後にいみじくも私と同じ誕生日のヘレンケラー氏の言葉に「Walking with a friend in the dark is better then walking along in the light(友と共に暗闇を歩くほうが、一人で明るみを歩くよし好ましい）」とあります。
      </p>
      <p>仲間たちとともに明るい未来を目指したいと思います。</p>
      <p class="ceo">代表取締役 立花陽二</p>
    </div>
    <div class="empty-box"></div>
  </main>
  <?php
    include BASE_PATH . 'includes/footer.php';
  ?>
</body>
</html>