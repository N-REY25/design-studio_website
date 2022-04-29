<?php
    require '../orm/db.php';

    if ($_POST['query'] == 'login') {
        $user = R::findOne('users', 'WHERE `email` = "'.$_POST['login'].'" OR `phone` = "'.$_POST['login'].'"');
        if ($user) {
            if (md5($_POST['pass']) == $user->password) {
                $_SESSION['user'] = $user;
                $arr = ['status'=>'successful'];
                $json = json_encode($arr);
                echo $json;
            } else {
                $arr = ['status'=>'error', 'message'=>'Неверно введен пароль!'];
                $json = json_encode($arr);
                echo $json;
            }
        } else {
            $arr = ['status'=>'error', 'message'=>'Пользователь не найден!'];
            $json = json_encode($arr);
            echo $json;
        }
    }

    if ($_GET['query'] == 'email') {
        $user = R::findOne('users', 'WHERE `email` = "'.$_GET['email'].'"');
        if ($user) {
            $arr = ['status'=>'ok', 'email'=>true];
            $json = json_encode($arr);
            echo $json;
        } else {
            $arr = ['status'=>'ok', 'email'=>false];
            $json = json_encode($arr);
            echo $json;
        }
    }

    if ($_POST['auch'] == 'reg') {
        $user = R::dispense('users');
        $user->name = $_POST['name'];
        $user->surname = $_POST['surname'];
        $user->phone = '';
        $user->email = $_POST['email'];
        $user->password = md5($_POST['pass']);
        R::store($user);
        $arr = ['status'=>'successful'];
        $json = json_encode($arr);
        echo $json;
    }