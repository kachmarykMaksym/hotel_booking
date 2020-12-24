<?php
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $pass = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

    $error = '';

  if (strlen($email) <= 3) 
    $error = 'Введіть корректний email';
        else if (strlen($pass) <= 3) 
            $error = 'Введіть коректний пароль';

    if($error != '') {
        echo $error;
    exit();
    }

    $hash = "op;olikfjirghjldfkgdlfnbs;dp'fowq'";
    $pass = md5($pass . $hash);

    $admin = 'root';
    $password = 'root';
    $db = 'booking';
    $host = 'localhost';
    $port = 3306;

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $admin, $password);

    $sql = 'SELECT `id` FROM `admin` WHERE `Email` = :email && `Password` = :pass';
    $query = $pdo->prepare($sql);
    $query->execute(['email' => $email, 'pass' => $pass]);

    $admin = $query->fetch(PDO::FETCH_OBJ);
    if($admin->id == 0)
        echo 'Користувача не знайдено';
        else {
            setcookie('admin', $email, time() + 3600 * 24 * 30, "/");
            echo true;
        }

?>