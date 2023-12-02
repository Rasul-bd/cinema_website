<div class="news-item">
    <div class="news_description">
        <h3><?=$item["title"]?></h3>
        <span class="news_date"><?=$item["date"]?></span>
        <p><?=$string = mb_substr( $item["short_text"], 0, 30, 'UTF-8' )?>...</p>
    <a href="/news/post?id=<?=$item["id"]?>" class="news_link">
        <span>Подробнее</span>
        <i class="bi bi-arrow-right"></i>
    </a>
    </div>
    <img class="news_img" src="<?=$item["small_img"]?>" alt="">
                            
</div>