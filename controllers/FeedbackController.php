<?php
class FeedbackController
{


    public function actionIndex()
    {
        $userText='';
        $userEmail='';

        $result=false;

        if(isset($_POST['submit'])) {
            $userText=$_POST['userText'];
            $userEmail=$_POST['userEmail'];

            $errors=false;

            //Валидация полей
            if(!User::checkEmail($userEmail)){
                $errors[]='неправильный email';
            }

            if($errors==false)
            {
                $adminEmail='newlinedaz@gmail.com';
                $message="Текст: {$userText}. От {$userEmail}";
                $subject='Тема сообщения';

                $result=mail($adminEmail,$subject,$message);

                $result=true;
            }
        }

        require_once(ROOT . '/views/feedback/index.php');

        return true;
    }

}