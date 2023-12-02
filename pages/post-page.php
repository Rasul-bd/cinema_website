<?php
    $post = post( $_GET["id"] );

?>
<title><?=$post['title']?></title>
<meta name="description" content="Описание главной страницы">

<?php require "tpl/header.php"; ?>

<main>
    <section class="post_main">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <a href="/news">
                        <i class="bi bi-arrow-left"></i>
                        <span>Назад</span>
                    </a>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <span><?=$post["date"]?></span>
                    <h2><?=$post["title"]?></h2>
                    <p><?=$post["short_text"]?></p>
                    <p><?=$post["long_text"]?></p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="<?=$post["big_img"]?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Еще новости</h2>
                </div>
                
                <div class="col-12 news-slider-block owl-carousel owl-theme">
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
