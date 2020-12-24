<?php
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $pass = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));
    $firstname = trim(filter_var($_POST['FirstName'], FILTER_SANITIZE_STRING));
    $lastname = trim(filter_var($_POST['LastName'], FILTER_SANITIZE_STRING));
    $phone = trim(filter_var($_POST['Phone'], FILTER_SANITIZE_STRING));
    
    $error = '';

    if (strlen($email) <= 3) 
        $error = 'Введість коректне імя';
        else if (strlen($pass) <= 3) 
            $error = 'Введість коректний email';
            else if (strlen($firstname) <= 3) 
                $error = 'Введість коректний логін';
                    else if (strlen($lastname) <= 3) 
                    $error = 'Введість коректний пароль';
                        else if (strlen($phone) <= 3) 
                        $error = 'Введість коректний пароль';


    if($error != '') {
        echo $error;
    exit();
    }

    $hash = "op;olikfjirghjldfkgdlfnbs;dp'fowq'";
    $pass = md5($pass . $hash);

    $user = 'root';
    $password = 'root';
    $db = 'booking';
    $host = 'localhost';
    $port = 3306;

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);
    
    $sql = 'INSERT INTO users(Email, password, FirstName, LastName, Phone) VALUES(?, ?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$email, $pass, $firstname, $lastname, $phone]);
    setcookie('user', $email, time() + 3600 * 24 * 30, "/");

    echo 'Готово';
?>