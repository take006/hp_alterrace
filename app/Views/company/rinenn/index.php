<?php
include_once dirname(__DIR__, 4) . '/config/config.php';
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__) . '/../../../');
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>企業理念</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet"href="<?= BASE_URL ?>assets/css/color.css">
    <link rel="stylesheet"href="<?= BASE_URL ?>assets/css/default.css">
    <link rel="stylesheet"href="<?= BASE_URL ?>assets/css/element.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
    <link rel="stylesheet"href="<?= BASE_URL ?>assets/css/link.css"">
    <link rel="stylesheet"href="<?= BASE_URL ?>assets/css/rinenn.css">
</head>
<body>
  <?php
    // その後、BASE_PATH を使ったファイルのインクルード
    include BASE_PATH . 'includes/header.php';
  ?>
  <main>
    <div class="page-title-wrapper">
      <h1 class="main-title">企業理念</h1>
      <p>Our Philosophy</p>
    </div>
    <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>index.php">ホーム</a></li>
      <li><a href="<?= BASE_URL ?>app/Views/company/index.php">COMPANY</a></li>
      <li>企業理念</li>
    </ol>
    <section>
      <div class="main-wrapper">
        <h3>私たちの信念</h3>
        <p>アルテラス株式会社は、社員一人ひとりの成長を支え、共に進化する企業を目指しています。私たちは、どんな仕事でも手抜きはしません。日々の業務において、誠実さと高いクオリティを求め、常に向上心を持って取り組むことを大切にしています。これからも、挑戦を続けることにより、社員と共に成長し、社会に貢献していきます。</p>
      </div>
      <div class="main-wrapper">
        <h3>社員の成長を支える</h3>
        <p>私たちは、社員一人ひとりが自分の可能性を最大限に発揮できるよう、環境を整えています。成長することで得られる達成感や、仲間と共に課題を乗り越えた喜びを感じることができる職場です。仕事を通じてスキルアップできるだけでなく、自己成長も支援することで、社員が充実した人生を送れるようにサポートしています。</p>
      </div>
      <div class="main-wrapper">
        <h3>未来に向けて</h3>
        <p>これからのアルテラス株式会社は、人材派遣事業にとどまらず、新たな事業の立ち上げを視野に入れています。時代の変化に柔軟に対応し、新しい挑戦を積極的に取り入れることで、会社の成長をさらに加速させていきます。社員一人ひとりが成長できる環境を整え、共に新しいステージへと進んでいきます。</p>
      </div>
      <div class="main-wrapper">
        <h3>地域と共に歩む</h3>
        <p>アルテラス株式会社は、奈良の地に根ざして長年活動してきました。地域社会への貢献を大切にし、地元の雇用創出や社会貢献活動に積極的に取り組んでいます。また、グローバル化の中で地域を重視し、ローカルな視点でクライアントとの信頼関係を築いています。今後も、地元企業や地域住民と共に成長し、地域社会に貢献していきます。</p>
      </div>
      <div class="main-wrapper">
        <h3>新たな挑戦</h3>
        <p>アルテラス株式会社は、常に変化を恐れず、成長し続ける企業です。今後、既存の事業に加え、さらなる新規事業の創出を目指し、挑戦を続けます。これからも社員と共に、新しいアイデアや価値を生み出し、社会に必要とされる企業として、さらなる発展を遂げていきます。</p>
      </div>
    </section>
    <section>
    <div class="main-wrapper">
      <h3>はじめに 〜新しいシルクロードのかたち〜</h3>
      <p>現代の私たちの暮らしにとって、インターネットはなくてはならない存在となりました。
しかし、何百年も前の時代にも、人と人、土地と土地をつなぐネットワークがありました。
それが「シルクロード」です。

もともとは商業のための交易路として知られていますが、実際には言語、文化、宗教、技術など、多くの“知”が行き交い、広がっていった道でした。
情報と想いが人から人へ、遠く離れた場所にも届いていく――私たちは、このシルクロードこそ、インターネットの原型だったのではないかと感じています。

アルテラス株式会社は、その終着点のひとつとも言われる奈良の地で創業しました。
古の時代に、文化の交差点として栄えた奈良。
そして現代、グローバル経済の波が押し寄せるなかで、私たちは**「ローカル」と「信頼」の価値**を改めて見つめ直しています。

確かに今は、インターネットとクレジットカードがあれば、世界中どこからでもモノが買える時代です。
でも、“人”を必要とするプロジェクトや仕事では、今でも信頼が何よりも大切です。
「誰と組むか」「誰が紹介してくれたか」──それが成功の鍵になることは変わっていません。

私たちアルテラスは、通信分野を中心とした人材派遣・コンサルティングを通じて、
地域に根ざした信頼のネットワークを育てています。

クライアントと“近くで”つながること

共通の目的を持つ仲間と“コミュニティ”をつくること

オンラインで学び、協力し、知識を“共有”し合うこと

そして、地球の裏側に依頼したら、実はご近所さんだった──そんな偶然すら楽しい、「新しいシルクロード」のような世界を目指して

これからも、私たちは「つながり」を大切にしながら、通信の現場を支え続けていきます。

</p>
    </div>
    <!-- イメージ図の仮挿入 -->
    <div class="sample-img-wrapper">
      <h3>理念の3要素をイメージ図で表示（Figmaで作成）</h3>
    </div>
    <div class="main-wrapper">
      <h3>旧あいさつ</h3>
      <p>
        日本は少子高齢化に向って加速化している中、仕事と スタッフのミスマッチが多くなり、
        人材難は顕著になりつつあるといえるでしょう。
        弊社は、パートナー企業様と連携を図り、
        高いスキルを有するスタッフによるクウォリティーの高いサービスを提供することで貢献してまいりました。
        いにしえの伝統と歴史ある奈良の地から、人にやさしく
        をもっとうにこれからもサー ビスを行ってまいります
      </p>
    </div>
    </section>
    <div class="main-wrapper"></div>
    <div class="main-wrapper"></div>
  </main>
  <?php
    include BASE_PATH . 'includes/footer.php';
  ?>
</body>
</html>