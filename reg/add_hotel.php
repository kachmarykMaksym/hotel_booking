<?php
    $coutry_add = trim(filter_var($_POST['coutry_add'], FILTER_SANITIZE_STRING));
    $img_1_add = trim(filter_var($_POST['img_1_add'], FILTER_SANITIZE_STRING));
    $img_2_add = trim(filter_var($_POST['img_2_add'], FILTER_SANITIZE_STRING));
    $img_3_add = trim(filter_var($_POST['img_3_add'], FILTER_SANITIZE_STRING));
    $img_4_add = trim(filter_var($_POST['img_4_add'], FILTER_SANITIZE_STRING));
    $img_5_add = trim(filter_var($_POST['img_5_add'], FILTER_SANITIZE_STRING));
    $label_add = trim(filter_var($_POST['label_add'], FILTER_SANITIZE_STRING));
    
    $error = '';

    if (strlen($coutry_add) < 3) 
        $error = 'Введість коректну назву';
        else if (strlen($img_1_add) <= 3) 
            $error = 'Введість коректе посилання';
            else if (strlen($img_2_add) <= 3) 
                $error = 'Введість коректне посилання';
                else if (strlen($img_3_add) <= 3)
                    $error = 'Введість коректне посилання';
                    else if (strlen($img_4_add) <= 3)
                        $error = 'Введість коректне посилання';
                            else if (strlen($img_5_add) <= 3) 
                            $error = 'Введість коректне посилання';
                                else if (strlen($label_add) <= 3) 
                                $error = 'Введість коректну назву';


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
    
    $sql = 'INSERT INTO countries(coutry, img_1, img_2, img_3, img_4, img_5, label) VALUES(?, ?, ?, ?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$coutry_add, $img_1_add, $img_2_add, $img_3_add, $img_4_add, $img_5_add, $label_add]);
    echo 'Готово';
?>