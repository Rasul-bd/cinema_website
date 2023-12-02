<div class="col-12 premiere-list">
                
    <?php

        $premiers = limited_premiers();
        foreach ($premiers as $item):

    ?>

    <a href="/film?url=<?=$item["url"]?>" class="film-card">
        <img src="/assets/img/films_cover/<?=$item['cover_img']?>" alt="">
        <h5><?=$item['title']?></h5>
    </a>

    <?php endforeach; ?>
</div>