<?php
    $hotel_id_upd = trim(filter_var($_POST['hotel_id_upd'], FILTER_SANITIZE_NUMBER_INT));
    $coutry_upd = trim(filter_var($_POST['coutry_upd'], FILTER_SANITIZE_STRING));
    $img_1_upd = trim(filter_var($_POST['img_1_upd'], FILTER_SANITIZE_STRING));
    $img_2_upd = trim(filter_var($_POST['img_2_upd'], FILTER_SANITIZE_STRING));
    $img_3_upd = trim(filter_var($_POST['img_3_upd'], FILTER_SANITIZE_STRING));
    $img_4_upd = trim(filter_var($_POST['img_4_upd'], FILTER_SANITIZE_STRING));
    $img_5_upd = trim(filter_var($_POST['img_5_upd'], FILTER_SANITIZE_STRING));
    $label_upd = trim(filter_var($_POST['label_upd'], FILTER_SANITIZE_STRING));
    
    $error = '';

    if (strlen($hotel_id_upd) < 1) 
        $error = 'Введість коректну назву';
        else if (strlen($coutry_upd) < 3) 
            $error = 'Введість коректну назву';
            else if (strlen($img_1_upd) <= 3) 
                $error = 'Введість коректе посилання';
                else if (strlen($img_2_upd) <= 3) 
                    $error = 'Введість коректне посилання';
                    else if (strlen($img_3_upd) <= 3)
                        $error = 'Введість коректне посилання';
                        else if (strlen($img_4_upd) <= 3)
                            $error = 'Введість коректне посилання';
                                else if (strlen($img_5_upd) <= 3) 
                                $error = 'Введість коректне посилання';
                                    else if (strlen($label_upd) <= 3) 
                                    $error = 'Введість коректну назву';


    if($error != '') {
        echo $error;
    exit();
    }

    $admin = 'root';
    $password = 'root';
    $db = 'booking';
    $host = 'localhost';
    $port = 3306;

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $admin, $password);
    
    
    $sql = 'UPDATE countries SET id = (?), coutry = (?), img_1 = (?), img_2 = (?), img_3 = (?), img_4 = (?), img_5 = (?), label = (?) WHERE countries.id = (?)';
    $query = $pdo->prepare($sql);
    $query->execute([$hotel_id_upd, $coutry_upd, $img_1_upd, $img_2_upd, $img_3_upd, $img_4_upd, $img_5_upd, $label_upd, $hotel_id_upd]);
    echo true;
?>