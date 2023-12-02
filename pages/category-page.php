<?php
if(isset($_SESSION['user']) && !empty($_SESSION['user'])):
?>
<title>Страница категорий</title>
<meta name="description" content="Описание главной страницы">

<?php require "tpl/header.php"; ?>


<main>
    <section class="category-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Категорий фильмов</h1>
                </div>
                <div class="col-12 category-list">
                
                <?php

                    $catArray = get_all_category();
                    foreach ($catArray as $item):

                ?>

                    <a href="/category/id?key=<?=$item["category_id"]?>" class="category-item">
                        <img src="/assets/img/icon/<?=$item["category_img"]?>" alt="">
                        <h3><?=$item["category_title"]?></h3>
                        <p><?=$item["category_description"]?></p>
                    </a>

                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
else: header("location:/check");
endif;
?>