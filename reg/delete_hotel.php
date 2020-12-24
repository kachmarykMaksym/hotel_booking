<?php
    $label_del = trim(filter_var($_POST['label_del'], FILTER_SANITIZE_STRING));
    $error = '';

  if (strlen($label_del) <= 0) 
    $error = 'Введість існуючу назву Готелю';

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

    $sql = 'DELETE FROM `countries` WHERE `label` = :label_del';
    $query = $pdo->prepare($sql);
    $query->execute(['label_del' => $label_del]);
    echo true;
?>