<?php
if(isset($_SESSION['user']) && !empty($_SESSION['user'])):
?>
<?php

    $category = get_category_by_id($_GET["key"]);

?>
<title>Категория <?=$category['category_title']?></title>
<meta name="description" content="Описание главной страницы">

<?php require "tpl/header.php"; ?>


<main>
    <section class="category-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-ms-12 col-sm-12 mb-5">
                    <h1>Фильм категории <?=$category['category_title']?></h1>
                    <p><?=$category['category_description']?></p>
                </div>
                <div class="row">
                    <div class="col-12 premiere-list">

                    <?php
                        $films = get_film_by_cat ($_GET["key"]);
                        foreach ($films as $item):
                    ?>

                        <a href="/film?url=<?=$item["url"]?>" class="film-card">
                            <img src="/assets/img/films_cover/<?=$item['cover_img']?>" alt="">
                            <h5><?=$item['title']?></h5>
                        </a>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
else: header("location:/check");
endif;
?>