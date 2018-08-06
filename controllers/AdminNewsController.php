<?php

class AdminNewsController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();

        //Получаем список новостей

        $newsList=array();
        $newsList=News::getNewsListAdmin();

        //Подключаем вид

        require_once(ROOT.'/views/admin_news/index.php');
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();

        //Обработка формы
        if(isset($_POST['submit']))
        {
            //Если форма отправленна удалить новость
            News::deleteNewsById($id);
            //Перенаправляем пользователя на страницу управления новостями
            header("Location: /admin/news");
        }

        require_once (ROOT.'/views/admin_news/delete.php');
        return true;
    }

    public function actionCreate()
    {
        self::checkAdmin();

        if(isset($_POST['submit']))
        {
            $options['title']=$_POST['title'];
            $options['content']=$_POST['content'];
            $options['short_content']=$_POST['short_content'];

            $errors=false;

            if(!isset($options['title']) || empty($options['title'])) {
                $errors[]='Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новую новость
                $id = News::createNews($options);

                // Если новость добавленна
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/images/{$id}.png");
                    }
                };

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/news");
            }

        }

        require_once (ROOT.'/views/admin_news/create.php');
        return true;
    }

    public function actionUpdate($id)
    {
        self::checkAdmin();

        // Получаем данные о конкретной новости
        $news=News::getNewsItemByID($id);

        if(isset($_POST['submit'])) {
            $options['title']=$_POST['title'];
            $options['content']=$_POST['content'];
            $options['short_content']=$_POST['short_content'];

            //Сохраняем изменения
            if (News::updateNewsById($id, $options)) {


                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/images/{$id}.png");
                }
            }
            header("Location: /admin/news");
        }

        require_once (ROOT.'/views/admin_news/update.php');
        return true;
    }
}