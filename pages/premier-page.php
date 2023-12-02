<title>Страница премьер</title>
<meta name="description" content="Описание главной страницы">

<?php require "tpl/header.php"; ?>


<main>
    <section class="category-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Категорий фильмов</h1>
                </div>
                <div class="col-12 premiere-list">
                
                    <?php

                        $premiers = premiers();
                        foreach ($premiers as $item):

                    ?>

                        <a href="/film?url=<?=$item["url"]?>" class="film-card">
                            <img src="/assets/img/films_cover/<?=$item['cover_img']?>" alt="">
                            <h5><?=$item['title']?></h5>
                        </a>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>