<title>Страница категорий</title>
<meta name="description" content="Описание главной страницы">

<?php require "tpl/header.php"; ?>

<main>
    <section class="news_main">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2>Новости мира кино</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 news-grid">

                <?php
                    $news = news();
                    foreach($news as $item){
                        require "tpl/blocks/post-card.php";
                    }
                ?>
                </div>
            </div>
        </div>
    </section>
</main>