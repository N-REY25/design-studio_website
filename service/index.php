<?php
    // Подключение к БД
    require '../orm/db.php';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>DecorStudio - профессиональный декор интерьеров, мебели, техники</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="wrapper">
                <div class="header">
                    <img class="h_img" src="../img/logo.svg" alt="logo">
                    <nav class="h_nav">
                        <?php require '../menu.php'; ?>
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
                    <img class="w_img" src="../img/image.png">
                    <div class="w_info">
                        <img class="wi_img" src="../img/image2.png">
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
        <?php if ($_GET['page'] == 'Оформление потолков') : ?>
            <section id="o_studio" class="o_studio_section">
                <div class="wrapper">
                    <div class="o_studio">
                        <div class="os_text">
                            <div class="ost_title">
                                <p class="ostt_p">Современные тенденции дизайна</br>в оформлении потолков</p>
                                <div class="hr_title"></div>
                            </div>
                            <p class="ost_p">Оформление потолков</p>
                            <p>Современность диктует получить от дизайна и оформления потолков расширение пространства, функциональность, естественность в цветовой гамме, уютную гармонию, зонирование потолочного пространства.</br></br><b>Актуальные тенденции таковы:</b></br></br>- отсутствие обоев на потолке, присутствие самых современных отделочных материалов, скрывающих изъяны и неровности поверхности;</br></br>- уход от белого цвета к эко- и этно-мотивам с насыщенными цветовыми оттенками в тон общему «настроению» помещения;</br></br>- оригинальность достигается комбинированием материалов, изменением уровня поверхности, с помощью встроенных систем освещения, мягких и одновременно ненавязчиво насыщенных оттенков цветового решения.</br></br><b>Классические каноны также не отменяются:</b></br></br>- белый цвет и светлые оттенки визуально расширяют пространственные границы;</br></br>- зонирование потолочной поверхности уровнем и светом придает помещению дополнительные возможности общего благоустройства;</br></br>- эффекта 3D в комнате позволяют добиться глянцевые и зеркальные поверхности с многофункциональными системами подсветки;</br></br>- матовый потолок в ванной комнате сочетается с глянцевым покрытием стен и мебели.</p>
                        </div>
                        <div class="os_imgs">
                            <img class="osi_img" src="../img/image16.png">
                            <img class="osi_img" src="../img/image17.png">
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif ($_GET['page'] == 'Оформление мебели') : ?>
            <section id="o_studio" class="o_studio_section">
                <div class="wrapper">
                    <div class="o_studio">
                        <div class="os_imgs">
                            <img class="osi_img" src="../img/image18.png">
                        </div>
                        <div class="os_text">
                            <div class="ost_title">
                                <p class="ostt_p">В дизайне интерьера самое главное - мебель.</br>И опытным профессионалам, и новичкам, ясно,</br>что она играет большую роль в интерьере.</br>На самом деле, это самый главный компонент,</br>с которого должен начинаться любой проект.</p>
                                <div class="hr_title"></div>
                            </div>
                            <p class="ost_p">Оформление мебели</p>
                            <p><b>Основные правила соблюдения при работе с проектом оформления мебели:</b></br></br>- Сведите к минимуму количество проходов, двух будет вполне достаточно.</br></br>- Движение должно быть направлено вокруг мест для сидения, а не через них.</br></br>- Между сидением и столом должно быть достаточно места для того, чтобы встать.</br></br>- Мебель должна отступать от стен приблизительно на 7.5 сантиметров.</br></br>- Места для сидения необходимо сгруппировать, это стимулирует общение.</br></br>- Большое помещение разбивают на несколько зон.</br></br>- Чтобы проверить, достаточно ли воздуха в комнате, попробуйте пробежать по ней.</p>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif ($_GET['page'] == 'Оформление стен') : ?>
            <section id="o_studio" class="o_studio_section">
                <div class="wrapper">
                    <div class="o_studio">
                        <div class="os_imgs">
                            <img class="osi_img" src="../img/image20.png">
                        </div>
                        <div class="os_text">
                            <div class="ost_title">
                                <p class="ostt_p">Мы придерживаемся нескольких основных факторов</br>оценки оформления стен в квартире.</p>
                                <div class="hr_title"></div>
                            </div>
                            <p class="ost_p">Оформление стен</p>
                            <p>Экологичность. Если материал токсичен, это опасно для здоровья жильцов.</br></br>- Отсутствие аллергии на вещества, из которых изготовлены отделочные материалы.</br></br>- Стоимость — это субъективный фактор, зависит от возможностей каждого человека.</br></br>- Технологии нанесения — иногда способ «монтажа» трудоемкий и стоит больших денег, чем сам материал.</br></br>- Характеристики отделки (термо- и влагостойкость, простота в уходе, эстетика) — в зависимости от того, в какой комнате делается ремонт, нужно учесть все особенности облицовки.</br></br>- Соответствие интерьеру — цвет, фактуры подбираются под задуманный дизайн, купленную мебель, если она уже есть и имеющиеся аксессуары. </p>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif ($_GET['page'] == 'Предметы декора') : ?>
            <section id="o_studio" class="o_studio_section">
                <div class="wrapper">
                    <div class="o_studio">
                        <div class="os_text">
                            <div class="ost_title">
                                <div class="hr_title"></div>
                            </div>
                            <p class="ost_p">Предметы декора</p>
                            <p>Декорирование интерьера является финальным аккордом дизайна. Правильно подобранные украшения для дома придают ему жилой вид и наполняют уютом. При этом именно милые детали вроде картины на стене, цветка на подоконнике или фигурки между баночками со специями на открытом стеллаже становятся теми яркими деталями, которые делают оформление уникальным.</p>
                        </div>
                        <div class="os_imgs">
                            <img class="osi_img" src="../img/image19.png">
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif ($_GET['page'] == 'Комплексное оформление') : ?>
            <section id="o_studio" class="o_studio_section">
                <div class="wrapper">
                    <div class="o_studio">
                        <div class="os_imgs" style="margin-right: 10px">
                            <img class="osi_img" src="../img/image21.png">
                            <img class="osi_img" src="../img/image23.png">
                        </div>
                        <div class="os_imgs">
                            <img class="osi_img" src="../img/image22.png">
                            <img class="osi_img" src="../img/image24.png">
                        </div>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <section id="o_studio" class="o_studio_section">
                <div class="wrapper">
                    <div class="o_studio">
                        <div class="os_imgs">
                            <img class="osi_img" src="../img/image25.png">
                        </div>
                        <div class="os_text">
                            <div class="ost_title">
                                <p class="ostt_p">Основные правила и принципы выбора</br>стиля оформления полов</p>
                                <div class="hr_title"></div>
                            </div>
                            <p class="ost_p">Оформление пола</p>
                            <p><b>Первое правило</b> - это зонирование. Важно правильно разграничивать помещения по их назначению, уметь разделить жилую (спальня, гостиная) и «рабочую» (ванная, кухня) зоны. Правильное оформление пола поможет сделать эти границы четче. В спальнях, гостиных рекомендовано использовать представительные, теплые и уютные типы материалов – ламинат, паркет. В ванной, кухне лучшем видом напольного покрытия станет плитка, наливной пол.</br></br><b>Второе</b> - это цвет. Полы, какие бы они ни были яркие и интересные, должны обязательно сочетаться с остальным помещением по цветовой гамме и самой идеи интерьера.</br></br><b>Третье правило</b> - назначение помещения. Здесь стоит ориентироваться на эксплуатационные характеристики материала. Чем большим испытаниям он будет подвергаться, тем прочнее должен быть.</br></br><b>Четвертое</b> - комбинирование материалов. Если в помещении планируется отделка полов двум материалами сразу, то они должны гармонировать между собой по цвету и фактурности. Также важно сделать аккуратный переход между ними.</p>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif ?>
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
                            <img class="pii_img" src="../img/image13.png">
                            <img class="pii_img" src="../img/image14.png">
                            <img class="pii_img" src="../img/image15.png">
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
    </body>
</html>