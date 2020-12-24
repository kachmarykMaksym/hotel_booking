<?php
    $email_adm = trim(filter_var($_POST['email_adm'], FILTER_SANITIZE_EMAIL));
    $pass_adm = trim(filter_var($_POST['password_adm'], FILTER_SANITIZE_STRING));
    $name_adm = trim(filter_var($_POST['name_adm'], FILTER_SANITIZE_STRING));
    
    $error = '';

    if (strlen($email_adm) <= 3) 
        $error = 'Введість коректне імя';
        else if (strlen($pass_adm) <= 3) 
            $error = 'Введість коректний email';
            else if (strlen($name_adm) <= 3) 


    if($error != '') {
        echo $error;
    exit();
    }

    $hash = "op;olikfjirghjldfkgdlfnbs;dp'fowq'";
    $pass_adm = md5($pass_adm . $hash);

    $admin = 'root';
    $password_adm = 'root';
    $db = 'booking';
    $host = 'localhost';
    $port = 3306;

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $admin, $password_adm);
    
    $sql = 'INSERT INTO admin(Email, password, Name) VALUES(?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$email_adm, $pass_adm, $name_adm]);
    echo 'Готово';
?>