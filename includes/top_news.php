<section id="news" class="fadeIn">
    <div class="news-wrapper">
        <div class="news-container">
            <div class="n-title-inner">
              <h2 class="sectionTitle text-center">ニュース</h2>
              <p class="sectionSubTitle text-center">news</p>
            </div>
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
                </div>
            <?php endforeach; ?>
        </div>
        <div class="news_btn">
            <a href="<?= BASE_URL ?>app/Views/news/index.php" class="gradient_button middle_button">
              <span class="btnText">ニュース一覧へ</span>
            </a>
        </div>
        <div class="empty-box"></div>
    </div>
</section>