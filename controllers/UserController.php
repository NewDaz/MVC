<?php

class UserController
{
    public function actionRegister()
    {
        $email='';
        $name='';
        $password='';
        $result=false;

        if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $name=$_POST['name'];
            $password=$_POST['password'];

            $errors=false;
            if(!User::checkName($name)) {
                $errors[]='Имя должно быть короче 2-х символов';
            }

            if(!User::checkEmail($email)) {
                $errors[]='Неправильный email';
            }


            if(!User::checkPassword($password)) {
                $errors[]='Пароль не должен быть короче 6-ти символов';
            }

            if(User::checkEmailExists($email)){
                $errors[]='Такой email уже используется';
            }

            if($errors==false){
                $result=User::register($name,$email,$password);
            }
        }


        require_once(ROOT . '/views/user/register.php');
        return true;
    }


    public function actionLogin()
    {
        $email='';
        $password='';

        if(isset($_POST['submit'])) {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $password=md5($password);

            $errors=false;

            //Валидация полей
            if(!User::checkEmail($email))
            {
                $errors[]='Неправильный email';
            }
            if(!User::checkPassword($password))
            {
                $errors[]='Неправильный пароль';
            }
            //Проверка существует ли пользователь
            $userId=User::checkUserData($email,$password);

            if($userId == false) {
                //Если данные не правильные
                $errors[]='Неправильные данные для входа на сайт';
            }
            else
            {
                //Если данные правильные, запоминаем пользователя(сессия)

                User::auth($userId);

                //Перенаправляем пользователя в закрытую часть - кабинет

                header("Location: /room/");
            }

        }

        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    /**
     * Удаляем данные о пользователе из сессии
     */
    public function actionLogout()
    {

        unset($_SESSION["user"]);
        header("Location: /");
    }
}