<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    $this_style = "./css/signUp.css";
    require './blocks/head.php'; ?>
</head>

<body>
    <?php require './blocks/searching_admin.php';
        ?>
        

    <div class="container ">
        <div class="row">
            <div class="col-md-3 mt-5 ml-5">
                <form action="" method="post">
                    <h4>Редагування Готелю</h4>
                    <label for="hotel_id_upd">ID Готелю</label>
                    <input type="text" name="hotel_id_upd" id="hotel_id_upd" class="form-control">

                    <label for="coutry_upd">Назва Країни</label>
                    <input type="text" name="coutry_upd" id="coutry_upd" class="form-control">

                    <label for="img_1_upd">Фото 1 Готелю</label>
                    <input type="text" name="img_1_upd" id="img_1_upd" class="form-control">

                    <label for="img_2_upd">Фото 2 Готелю</label>
                    <input type="text" name="img_2_upd" id="img_2_upd" class="form-control">

                    <label for="img_3_upd">Фото 3 Готелю</label>
                    <input type="text" name="img_3_upd" id="img_3_upd" class="form-control">

                    <label for="img_4_upd">Фото 4 Готелю</label>
                    <input type="text" name="img_4_upd" id="img_4_upd" class="form-control">

                    <label for="img_5_upd">Фото 5 Готелю</label>
                    <input type="text" name="img_5_upd" id="img_5_upd" class="form-control">

                    <label for="label_upd">Назва Готелю</label>
                    <input type="text" name="label_upd" id="label_upd" class="form-control">

                    <div class="aletr alert-danger mt-3" id="errorBlock_upd"></div>

                    <button type="button" id="upd_hotel" class="btn btn-success mt-2 mb-2">Додати</button>
                </form>
            </div>

            <aside class="col-md-3 ml-5">
                <div class="mt-5 mb-5">
                    <form action="" method="post">
                        <h4>Додавання Готелю</h4>
                        <label for="coutry_add">Назва Країни</label>
                        <input type="text" name="coutry_add" id="coutry_add" class="form-control">

                        <label for="img_1_add">Фото 1 Готелю</label>
                        <input type="text" name="img_1_add" id="img_1_add" class="form-control">

                        <label for="img_2_add">Фото 2 Готелю</label>
                        <input type="text" name="img_2_add" id="img_2_add" class="form-control">

                        <label for="img_3_add">Фото 3 Готелю</label>
                        <input type="text" name="img_3_add" id="img_3_add" class="form-control">

                        <label for="img_4_add">Фото 4 Готелю</label>
                        <input type="text" name="img_4_add" id="img_4_add" class="form-control">

                        <label for="img_5_add">Фото 5 Готелю</label>
                        <input type="text" name="img_5_add" id="img_5_add" class="form-control">

                        <label for="label_add">Назва Готелю</label>
                        <input type="text" name="label_add" id="label_add" class="form-control">

                        <div class="aletr alert-danger mt-3" id="errorBlock_add"></div>

                        <button type="button" id="add_hotel" class="btn btn-success mt-2">Додати</button>
                    </form>
                </div>
            </aside>

            <aside class="col-md-3 ml-5">
                <div class="mt-5 mb-5">
                    <form action="" method="post">
                        <h4>Видалення Готелю</h4>
                        <label for="label_del">Введіть назву Готелю</label>
                        <input type="text" name="label_del" id="label_del" class="form-control">

                        <div class="aletr alert-danger mt-3" id="errorBlock_del"></div>

                        <button type="button" id="delete_hotel" class="btn btn-success mt-2">Видалити</button>
                    </form>
                </div>

                <div class="mt-5 mb-5">
                    <form action="" method="post">
                        <h4>Додавання Адміна</h4>
                        <label for="email_adm">Пошта Адміністратора</label>
                        <input type="email" name="email_adm" id="email_adm" class="form-control">

                        <label for="password_adm">Пароль Адміністратора</label>
                        <input type="password" required autocomplete="current-password" name="password_adm" id="password_adm" class="form-control">
                        
                        <label for="name_adm">Ім'я</label>
                        <input type="Text" name="name_adm" id="name_adm" class="form-control">

                        <div class="aletr alert-danger mt-3" id="errorBlock_adm"></div>

                        <button type="button" id="add_admin" class="btn btn-success mt-2">Додати</button>
                    </form>
                </div>
            </aside>
        </div>
    </div>

    <div class="accordion col-md-12" id="accordionExample">
        <div class="card">
            <div class="card-header highlight" id="headingOne">
                <h2 class="clearfix mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Список Усіх Готелів<i class="material-icons">  +  </i></a>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="container-xl" style="max-width: 100%;">
                    <div class="table-responsive-xl">
                        <div class="table-wrapper">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Country</th>
                                    <th>Label</th>
                                </tr>
                                </thead>
                                <tbody><?php
                                require './blocks/connection_admin.php';
                                $query = $pdo->query('SELECT * FROM countries ORDER BY id DESC');
                                $i = 1;
                                while($row = $query->fetch(PDO::FETCH_OBJ)){
                                    echo '<tr>
                                    <td>' . $i . '</td>
                                    <td>' . $row->id . '</td>
                                    <td>' . $row->coutry . '</td>
                                    <td>' . $row->label . '</td>
                                    </tr>';
                                    $i++;
                                }
                                ?></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Список Адміністраторів<i class="material-icons">  +  </i></a>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="container-xl" style="max-width: 100%;">
                    <div class="table-responsive-xl">
                        <div class="table-wrapper">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = $pdo->query('SELECT * FROM admin ORDER BY id DESC');
                                $i = 1;
                                while($row = $query->fetch(PDO::FETCH_OBJ)){
                                    echo '<tr>
                                    <td>' . $i . '</td>
                                    <td>' . $row->id . '</td>
                                    <td>' . $row->Email . '</td>
                                    <td>' . $row->Password . '</td>
                                    <td>' . $row->Name . '</td>
                                    </tr>';
                                    $i++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php 
        if ($_COOKIE['user']=='' && $_COOKIE['admin']=='') {
            require './blocks/footer.php';
        } else if ($_COOKIE['user']!='') {
            require './blocks/footer.php';
        } else if ($_COOKIE['admin']!='') {
            require './blocks/footer_admin.php';
        }
    ?>
<!-- jQuery first, then Popper.js, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
        <?php 
            if ($_COOKIE['admin']!=''){
                $this_style = "../reg/exit_admin.php";
                require './blocks/exit_command.php'; }
        ?>

        $('#upd_hotel').click(function() {
            var hotel_id_upd = $('#hotel_id_upd').val();
            var coutry_upd = $('#coutry_upd').val();
            var img_1_upd = $('#img_1_upd').val();
            var img_2_upd = $('#img_2_upd').val();
            var img_3_upd = $('#img_3_upd').val();
            var img_4_upd = $('#img_4_upd').val();
            var img_5_upd = $('#img_5_upd').val();
            var label_upd = $('#label_upd').val();
            
            $.ajax({
                url: './reg/upd_hotel.php',
                type: 'POST',
                cache: false,
                data: {'hotel_id_upd': hotel_id_upd, 'coutry_upd': coutry_upd, 'img_1_upd': img_1_upd, 'img_2_upd': img_2_upd, 'img_3_upd': img_3_upd, 'img_4_upd': img_4_upd, 'img_5_upd': img_5_upd, 'label_upd': label_upd},
                dataType: 'html',
                success: function(data) {
                    if (data == true) {
                    $('#upd_hotel').text('Готово');
                    $('#errorBlock_upd').hide();
                    document.location.reload(true);
                    } else {
                        $('#errorBlock_upd').show();
                        $('#errorBlock_upd').text(data);
                    }
                }
            });
        });

        $('#add_hotel').click(function() {
            var coutry_add = $('#coutry_add').val();
            var img_1_add = $('#img_1_add').val();
            var img_2_add = $('#img_2_add').val();
            var img_3_add = $('#img_3_add').val();
            var img_4_add = $('#img_4_add').val();
            var img_5_add = $('#img_5_add').val();
            var label_add = $('#label_add').val();

            $.ajax({
                url: './reg/add_hotel.php',
                type: 'POST',
                cache: false,
                data: {'coutry_add': coutry_add, 'img_1_add': img_1_add, 'img_2_add': img_2_add, 'img_3_add': img_3_add, 'img_4_add': img_4_add, 'img_5_add': img_5_add, 'label_add': label_add},
                dataType: 'html',
                success: function(data) {
                    if (data == 'Готово') {
                    $('#admin.php').text('Все готово');
                    document.location.reload(true);
                    } 
                }
            });
        });

        $('#delete_hotel').click(function() {
            var label_del = $('#label_del').val();
            
            $.ajax({
                url: './reg/delete_hotel.php',
                type: 'POST',
                cache: false,
                data: {'label_del': label_del},
                dataType: 'html',
                success: function(data) {
                    if (data == true) {
                    $('#label_del').text('Готово');
                    $('#errorBlock_del').hide();
                    document.location.reload(true);
                    } else {
                        $('#errorBlock_del').show();
                        $('#errorBlock_del').text(data);
                    }
                }
            });
        });

        $('#add_admin').click(function() {
            var email_adm = $('#email_adm').val();
            var pass_adm = $('#password_adm').val();
            var name_adm = $('#name_adm').val();
            $.ajax({
                url: './reg/reg-admin.php',
                type: 'POST',
                cache: false,
                data: {'email_adm': email_adm, 'password_adm': pass_adm, 'name_adm': name_adm},
                dataType: 'html',
                success: function(data) {
                    if (data == 'Готово') {
                    $('#singUp').text('Все готово');
                    document.location.reload(true);
                    } 
                }
            });
        });
</script>



</body>
</html>