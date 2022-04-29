<?php
    //Проверка на авторизацию
    if (!isset($_SESSION['user'])) {
        header('Location: /admin');
    }
?>
<!DOCTYPE html>
<html lang="ru" style="height: 100%;">
    <head>
        <meta charset="UTF-8">
        <title>Личный кабинет</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body style="height: 100%; background-color: #00000010;">
    <header>
            <div class="wrapper">
                <div class="header">
                    <img class="h_img" src="../img/logo.svg" alt="logo">
                    <nav class="h_nav">
                        <a class="hn_a" id="button-service" href="/#service">Наши услуги</a>
                        <a class="hn_a" id="button-portfolio" href="/#portfolio">Портфолио</a>
                        <a class="hn_a" id="button-o_studio" href="/#o_studio">О студии</a>
                        <a class="hn_a" id="button-contacts" href="/#contacts">Контакты</a>
                        <a class="hn_a" href="/admin?logout">Выход</a>
                    </nav>
                </div>
            </div>
        </header>
        <section class="lk_section">
            <div class="wrapper">
                <div class="lk">
                    <img class="lk_img" src="../img/6mz.gif" alt="">
                    <h1>Добро пожаловать в личный кабинет!</h1></br></br>
                    <p>
                        <b>Вот что нам известно о вас:</b></br></br>
                        <b>Имя:</b> <?php echo $_SESSION['user']->name ?></br></br>
                        <b>Фамилия:</b> <?php echo $_SESSION['user']->surname ?></br></br>
                        <b>E-mail для связи:</b> <?php echo $_SESSION['user']->email ?>
                    </p>
                </div>
            </div>
        </section>
    </body>
</html>