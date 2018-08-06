<?php
return array(
    //Пользователь:
    'user/register'=>'user/register',
    'user/login'=>'user/login',
    'user/logout'=>'user/logout',
    'room/edit'=>'room/edit',
    'room'=>'room/index',
    //Управление новостями
    'admin/news/create'=>'adminNews/create',
    'admin/news/update/([0-9]+)'=>'adminNews/update/$1',
    'admin/news/delete/([0-9]+)'=>'adminNews/delete/$1',
    'admin/news'=>'adminNews/index',
    //Админпанель:
    'admin'=>'admin/index',
    //Обо мне
    'about'=>'about/index',
    //Обратная связь
    'feedback'=>'feedback/index',
    //Новости:
    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',
    //Главная
    ''=>'news/index',
	);