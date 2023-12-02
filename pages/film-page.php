<?php
if(isset($_SESSION['user']) && !empty($_SESSION['user'])):
?>

<?php
    $film = film_by_url( $_GET["url"] );

?>
<title>Фильм <?=$film['title']?></title>
<meta name="description" content="Описание главной страницы">

<?php require "tpl/header.php"; ?>


<main>
    <section class="category-main">
        <div class="container">
            <div class="row justyfy-content-between mb-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <img src="/assets/img/films_cover/<?=$film["cover_img"]?>" class="film-page_film-cover img-fluid" alt="">
                </div>
                <div class="col-lg-9 col-md-6 col-sm-12 film-page-descr">
                    <h1><?=$film["title"]?></h1>

                    <p><?=$film["description"]?></p>

                    <div class="actors">
                        <h6>Актерский состав:</h6>
                        <div><?=$film["actors"]?></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <iframe class="film-video" src="<?=$film["video_src"]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
else: header("location:/check");
endif;
?>