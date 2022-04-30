<a class="hn_a" id="button-service" href="/#service">Наши услуги</a>
<a class="hn_a" id="button-portfolio" href="/#portfolio">Портфолио</a>
<a class="hn_a" id="button-o_studio" href="/#o_studio">О студии</a>
<a class="hn_a" id="button-contacts" href="/#contacts">Контакты</a>
<?php if (!isset($_SESSION['user'])) : ?>
    <a class="hn_a" href="/admin">Регистрация/Вход</a>
<?php else : ?>
    <a class="hn_a" href="/admin">Личный кабинет</a>
    <a class="hn_a" href="/admin?logout">Выход</a>
<?php endif ?>