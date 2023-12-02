<div class="admin-section hide-section" id="news">

    <h1>Добавить новость</h1>
    <form action="/data/functions/add-news.php" method="POST" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="">Введите название новости</label>
            <input type="text" name="title" required class="col-12 form-control">
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <label for="">Введите краткое описние</label>
                <textarea name="short_text" cols="30" required class="w-100 form-control"></textarea>
            </div>
            <div class="col-6">
                <label for="">Введите полное описние</label>
                <textarea name="long_text" cols="30" required class="w-100 form-control"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <label for="">Загрузите ссылку к превью</label>
                <input type="text" name="small_img" class="form-control w-100" required>
            </div>
            <div class="col-6">
                <label for="">Загрузите ссылку к большой фотографий</label>
                <input type="text" name="big_img" class="form-control w-100" required>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </div>
    </form>

</div>