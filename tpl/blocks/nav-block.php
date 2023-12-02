<form
    action="/search"
    method="GET"
    class="search-form"
>
    <input type="text" name="key" placeholder="Поиск" required>
    <button type="submit" class="bi bi-search"></button>
</form>
<nav class="desktop-nav">
    <a href="/category">Категорий</a>
</nav>
<div class="user-icon">
    <i class="bi bi-person-circle"></i>
    <span><?=$_SESSION['user']?></span>
</div>

<a href="/data/functions/logout-func.php" class="btn btn-light">Выйти</a>