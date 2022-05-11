<?php
    // Подключение к БД
    require 'orm/db.php';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>DecorStudio - профессиональный декор интерьеров, мебели, техники</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="wrapper">
                <div class="header">
                    <img class="h_img" src="img/logo.svg" alt="logo">
                    <nav class="h_nav">
                        <?php require 'menu.php'; ?>
                    </nav>
                </div>
            </div>
        </header>
        <section class="info_welcome_section">
            <div class="wrapper">
                <div class="info_welcome">
                    <p class="iw_p">Профессиональный декор интерьеров,</br>мебели, техники</p>
                </div>
            </div>
        </section>
        <section class="welcome_section">
            <div class="wrapper">
                <div class="welcome">
                    <img class="w_img" src="img/image.png">
                    <div class="w_info">
                        <img class="wi_img" src="img/image2.png">
                        <div class="wi_items">
                            <div class="wi_text">
                                <div class="wit_kub"></div>
                                <p>Индивидуальное решение для каждого проекта</p>
                            </div>
                            <div class="wi_text">
                                <div class="wit_kub"></div>
                                <p>Точное соблюдение условий и сроков</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="service" class="service_section">
            <div class="wrapper">
                <div class="service">
                    <div class="s_title">
                        <p class="st_p">Чем мы занимаемся</p>
                        <div class="hr_title"></div>
                    </div>
                    <div class="s_items">
                        <a class="s_item" href="/service?page=Оформление потолков">
                            <img class="si_img" src="img/image3.png">
                            <div class="si_text">
                                <p class="sit_p">Оформление потолков</p>
                            </div>
                        </a>
                        <a class="s_item" href="/service?page=Оформление мебели">
                            <img class="si_img" src="img/image4.png">
                            <div class="si_text">
                                <p class="sit_p">Оформление мебели</p>
                            </div>
                        </a>
                        <a class="s_item" href="/service?page=Оформление стен">
                            <img class="si_img" src="img/image5.png">
                            <div class="si_text">
                                <p class="sit_p">Оформление стен</p>
                            </div>
                        </a>
                        <a class="s_item" href="/service?page=Предметы декора">
                            <img class="si_img" src="img/image6.png">
                            <div class="si_text">
                                <p class="sit_p">Предметы декора</p>
                            </div>
                        </a>
                        <a class="s_item" href="/service?page=Комплексное оформление">
                            <img class="si_img" src="img/image7.png">
                            <div class="si_text">
                                <p class="sit_p">Комплексное оформление</p>
                            </div>
                        </a>
                        <a class="s_item" href="/service?page=Оформление пола">
                            <img class="si_img" src="img/image8.png">
                            <div class="si_text">
                                <p class="sit_p">Оформление пола</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="o_studio" class="o_studio_section">
            <div class="wrapper">
                <div class="o_studio">
                    <div class="os_imgs">
                        <img class="osi_img" src="img/image11.png">
                        <img class="osi_img" src="img/image9.png">
                    </div>
                    <div class="os_text">
                        <div class="ost_title">
                            <p class="ostt_p">Более 400</br>выполненных проектов</p>
                            <div class="hr_title"></div>
                        </div>
                        <p class="ost_p">Красота в деталях</p>
                        <p>Маленькие детали способны превратить совершенно скучный и стерильный интерьер в настоящий дизайнерский шедевр. И, напротив, неуместно выбранный декор превратит шедевр в воплощение безвкусицы.</br></br>В том или ином виде и количестве декор присутствует в любом интерьере. Цветок, декоративная диванная подушка, картина на стене, зеркало в раме – всё это способы украсить жилище, сделать его уютнее и комфортнее. </p>
                    </div>
                    <div class="os_imgs">
                        <img class="osi_img" src="img/image12.png">
                        <img class="osi_img" src="img/image10.png">
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="portfolio_section">
            <div class="wrapper">
                <div class="portfolio">
                    <div class="p_title">
                        <div class="hr_title"></div>
                        <p class="pt_p">Недавние проекты</p>
                    </div>
                    <div class="p_info">
                        <p class="pi_p">С 2010 года мы рады видеть улыбки наших клиентов и слышать слова благодарностии, и, конечно же, реализовывать проекты любой сложности. Каждый день наши сотрудники с удовольствием совершенствуют свои способности и шагают в одну ногу со временем и динамичным стилем.</p>
                        <div class="pi_imgs">
                            <img class="pii_img" src="img/image13.png">
                            <img class="pii_img" src="img/image14.png">
                            <img class="pii_img" src="img/image15.png">
                        </div>
                    </div>
                    <div class="p_footer">
                        <div class="pf_hr"></div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="wrapper">
                <div class="footer">
                    <div class="f_text">
                        <p>+7 (495) 352-45-54</p>
                        <p>г. Пенза, Московская 122Б оф. 304</p>
                        <p>Студия профессионального декора</p>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            $('#button-service').click(function () {
                $('body,html').animate({
                    scrollTop: 750
                }, 2000);
                return false;
            });
            $('#button-portfolio').click(function () {
                $('body,html').animate({
                    scrollTop: 1450
                }, 2000);
                return false;
            });
            $('#button-o_studio').click(function () {
                $('body,html').animate({
                    scrollTop: 1200
                }, 2000);
                return false;
            });
            $('#button-contacts').click(function () {
                $('body,html').animate({
                    scrollTop: 4300
                }, 2000);
                return false;
            });
        </script>
    </body>
</html>