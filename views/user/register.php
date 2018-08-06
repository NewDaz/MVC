<?php include ROOT. '/views/layouts/header.php';?>
<?php include ROOT.'/views/layouts/menu.php';?>

    <div id="wrapper">
        <div id="articles">
            <div align="center">
                <?php if ($result): ?>
                <p>Вы зарегистрированны </p>
                </br>
                    </br>
            <?php else: ?>
            <?php if (isset($errors)&& is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li>- <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            </div>
            <form action="#" method="post" >
                <label for="email">Email</label>
                <input type="email"  id="email" name="email" placeholder="adress@example.com" value="<?php echo $email;?>"/>
                <label for="name">Введите ваше имя</label>
                <input type="text"  id="name" name="name" placeholder="Введите ваше имя" value="<?php echo $name;?>" />
                <label for="password">Введите ваше пароль</label>
                <input type="password" id="password" name="password" placeholder="Введите пароль" value="<?php echo $password;?>" />
                <input type="submit" value="Регистрация" id="send" name="submit"/>
            </form>
            <?php endif; ?>
        </div>
    </div>
    </div>

    </div>


<?php include ROOT.'/views/layouts/footer.php';?>