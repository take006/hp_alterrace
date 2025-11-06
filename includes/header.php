<header>
    <div class="headerMenu_logo">
      <a href="<?= BASE_URL ?>public/index.php">
        <img src="<?php echo BASE_URL; ?>public/assets/images/logo.png" alt="会社ロゴ" class ="headerMenu_logo_img">
      </a>
    </div>
    <nav class="headerMenu">
      <ul class="headerMenu_list">
          <li class="headerMenu_list_item">
            <a href="<?= BASE_URL ?>app/views/business/index.php">事業内容</a>
          </li>
          <li class="headerMenu_list_item">
            <a href="<?= BASE_URL ?>app/views/company/index.php">会社情報</a>
          </li>
          <li class="headerMenu_list_item">
            <a href="<?= BASE_URL ?>app/views/recruit/index.php">採用</a>
          </li>
          <li class="headerMenu_list_item">
            <a href="<?= BASE_URL ?>app/views/news/index.php">ニュース</a>
          </li>
          <li class="headerMenu_list_item-b">
            <a href="<?= BASE_URL ?>app/views/contact/form.php" class="gradient_button header_button">
              <span class="btnText">お問い合わせ</span>
            </a>
          </li>
      </ul>
    </nav>

    <div class="nav-click-container">
        <span class="nav-click-border-1"></span>
        <span class="nav-click-border-2"></span>
        <span class="nav-click-border-3"></span>
    </div>


    <div class="nav-content-container no-show">
      <div class="nav-content-box">
        <nav>
            <ul>
              <li class="fa-solid">
                <a href="<?= BASE_URL ?>app/views/business/index.php">事業内容</a>
              </li>
              <li class="fa-solid">
                <a href="<?= BASE_URL ?>app/views/company/index.php">会社情報</a>
              </li>
              <li class="fa-solid">
                <a href="<?= BASE_URL ?>app/views/recruit/index.php">採用</a>
              </li>
              <li class="fa-solid">
                <a href="<?= BASE_URL ?>app/views/news/index.php">ニュース</a>
              </li>
              <li class="fa-solid">
                <a href="<?= BASE_URL ?>app/views/contact/form.php">お問い合わせ</a>
              </li>
            </ul>
        </nav>
      </div>
    </div>
 </header>