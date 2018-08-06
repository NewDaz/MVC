<div class="clear"><br /></div>
<center>
    <div id="menu">Разделы <hr /></div>
    <div id="menuHrefs">
        <a href="/news/">Новости</a>
        <a href="/about/">Обо мне</a>
        <a href="/feedback/">Обратная связь</a>
        <?php if(User::isGuest()): ?>
        <a href="/user/login/">Вход</a>
        <a href="/user/register/">Регистрация</a>
        <?php else: ?>
        <a href="/user/logout/">Выход</a>
        <a href="/room/index/">Аккаунт</a>
        <?php endif; ?>
    </div>
</center>
