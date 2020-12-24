<?php
    $email_book = trim(filter_var($_POST['email_book'], FILTER_SANITIZE_EMAIL));
    $country_book = trim(filter_var($_POST['country_book'], FILTER_SANITIZE_STRING));
    $label_book = trim(filter_var($_POST['label_book'], FILTER_SANITIZE_STRING));
    $date_book = trim(filter_var($_POST['date_book'], FILTER_SANITIZE_STRING));
    
    $error = '';

    if (strlen($email_book) < 3) 
        $error = 'Введість коректну назву';
        else if (strlen($country_book) < 2) 
            $error = 'Введість коректе посилання';
            else if (strlen($label_book) <= 3) 
                $error = 'Введість коректне посилання';
                else if (strlen($date_book) <= 3)
                    $error = 'Введість коректне посилання';


    if($error != '') {
        echo $error;
    exit();
    }

    $user = 'root';
    $password = 'root';
    $db = 'booking';
    $host = 'localhost';
    $port = 3306;

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);
    
    $sql = 'INSERT INTO boocking(Email, Country, Label, Date) VALUES(?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$email_book, $country_book, $label_book, $date_book]);
    echo 'Готово';
?>