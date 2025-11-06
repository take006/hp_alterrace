<?php
  include_once dirname(__DIR__, 5) . '/config/config.php'; 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>募集要項：コールセンター</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/resetting.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/color.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/element.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/link.css"">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/table.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/requirement.css">
</head>
<body>
  <?php
    // その後、BASE_PATH を使ったファイルのインクルード
    include BASE_PATH . 'includes/header.php';
  ?>
  <main>
    <div class="page-title-wrapper">
      <h1 class="main-title">募集要項</h1>
      <p>Requirementw</p>
    </div>
    <ol id="readcrumb">
      <li><a href="<?= BASE_URL ?>index.php">ホーム</a></li>
      <li><a href="<?= BASE_URL ?>app/views/recruit/index.php">採用情報</a></li>
      <li>募集要項：モバイル販売業務</li>
    </ol>
    <div class="main-wrapper">
    </div>
    <div class="table-wrapper">
    <h1 class="T-tile">モバイル販売業務</h1>
      <table>
        <tbody>
        <tr>
            <th>職種</th>
            <td>
            モバイル販売業務
            </td>
          </tr>
          <tr>
            <th>雇用形態</th>
            <td>
              契約社員
            </td>
          </tr>
          <tr>
            <th>給与</th>
            <td>
              時給1,400円
              <br>※試用期間あり（3ヶ月｜同条件）
              <br><br>【各種手当】
              <br>交通費：全額支給
              <br>残業代：全額支給
            </td>
          </tr>
          <tr>
            <th>仕事内容</th>
            <td>
              人材サービス事業、教育事業など
              <br>さまざまな事業を展開する当社。

              <br>2010年の設立以来、業績は右肩上がり。
              <br>今後のさらなる事業拡大を見据えて、モバイル販売部門を強化します。

              <br>学歴不問／未経験積極採用！社会人経験がない方も大歓迎！
              <br>WEB面接も実施中ですので、在職中の方や遠方の方もご安心ください。

              <br><br>【仕事内容】
              <br>電話対応
              <br>データ入力
              　
              <br>男女比5:5。20代・30代・40代の方が年齢を問わず多数活躍中！
              <br>◎モバイル販売未経験者歓迎◎第二新卒者歓迎◎社会人未経験者歓迎
            </td>
          </tr>
          <tr>
            <th>勤務時間</th>
            <td>
            9:00～18:00
            <br>10:00～19:00
            <br>※残業はほとんどありません（月平均10h程度）
            </td>
          </tr>
          <tr>
            <th>勤務場所</th>
            <td>
            勤務先
            <br>派遣先による
            <br>※自宅から1時間以内の店舗
            </td>
          </tr>
          <tr>
            <th>勤務開始日</th>
            <td>
              即日
              <br>※要相談
            </td>
          </tr>
          <tr>
            <th>勤務期間
            </th>
            <td>長期
            <br>※6か月以上</td>
          </tr>
          <tr>
            <th>募集人数
            </th>
            <td>5名</td>
          </tr>
          <tr>
            <th>経験・資格</th>
            <td>
            年齢問わず男女ともに多数活躍中！
            <br>◎通信未経験者歓迎◎第二新卒者歓迎◎

            <br>※通信経験者は大歓迎
            <br>【応募必須スキル】
            <br>PC（メール・Excelなど）基本操作

            <br>【対象となる方】
            <br>・接客業務の未経験方
            <br>・販売職に憧れがある方
            <br>・残業が少ない職場を探している方
            <br>・PCスキル・IT知識を活かしたい方
            </td>
          </tr>
          <tr>
            <th>休日・休暇
            </th>
            <td>
              週休2日制　※月21日稼働　シフト制
              <br>【年間休日】
              <br>・110日以上
          </td>
          </tr>
          <tr>
            <th>待遇・福利厚生</th>
            <td>
              <p>
                健康保険
                <br>雇用保険
                <br>厚生年金
                <br>労災保険
                <br>定期健康診断
                <br>資格取得奨励制度
                <br><br>【試用期間】
                <br>3ヶ月
                <br>労働条件は本採用と同じです。
                <br><br>【保険制度】
                <br> ・健康保険
                <br>・厚生年金
                <br>・雇用保険
                <br>・労災保険
                <br><br>【設備・環境】
                <br>ピアスOK
                <br>研修制度あり
              </p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="empty-box"></div>
  </main>
  <?php
    include BASE_PATH . 'includes/footer.php';
  ?>
</body>
</html>