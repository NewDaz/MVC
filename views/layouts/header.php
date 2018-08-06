<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link href="/template/css/main.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/template/images/internet.png" rel="short icon" type="image/x-icon"/>
    <title>My site</title>
</head>
<body>
<div id="page-wrap">
    <header>
        <a href="/"><img src="/template/images/logo.png" alt="На главную" title="На главную" /></a>
        <span class="contact"><a href="/about/" title="Info">Обо мне</a></span>
        <?php if(User::isGuest()): ?>
        <span class="right"> <span class="contact"><a href="/user/login/" title="login">Вход</a></span></span>
        <span class="right"> <span class="contact"><a href="/user/register/" title="Registration">Регистрация</a></span></span>
        <?php else: ?>
        <span class="right"> <span class="contact"><a href="/room/index/" title="Room">Аккаунт</a></span></span>
        <span class="right"> <span class="contact"><a href="/user/logout/" title="logout">Выход</a></span></span>
        <?php endif; ?>
    </header>
