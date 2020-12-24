<!DOCTYPE html>
<html>
<head>
    <?php 
    $this_style = "./css/profile.css";
    require './blocks/head.php'; ?>

</head>

<body>
    <?php 
        if ($_COOKIE['user']=='' && $_COOKIE['admin']=='') {
            require './blocks/searching.php';
        } else if ($_COOKIE['user']!='') {
            require './blocks/searching_user.php';
        } else if ($_COOKIE['admin']!='') {
            require './blocks/searching_admin.php';
        }
    ?>
      <section>
        <div class="pages">
            <div class="container">
                <div class="pages__inner">
                    <div class="pages__inner-information">
                        <?php
                            require_once './blocks/connection.php';
                            $query = $pdo->query('SELECT * FROM `users` WHERE users.Email = "'.$_COOKIE['user'].'"');
                            while($row = $query->fetch(PDO::FETCH_OBJ)){
                                echo '
                                <p> Користувач  -   ' . $row->FirstName . '    ' . $row->LastName . '</p>
                                <p> Номер телефону    -    ' . $row->Phone . '</p>';
                                }
                        ?>
                    </div>
                    <div class="pages__inner-information">
                        <ul class="list">
                        <?php
                            require_once './blocks/connection.php';
                            $query = $pdo->query('SELECT * FROM `boocking` WHERE boocking.Email = "'.$_COOKIE['user'].'"');
                            while($row = $query->fetch(PDO::FETCH_OBJ)){
                                echo '<li>
                                <p> Країна  -   ' . $row->Country  . '</p>
                                <p> Готель    -    ' . $row->Label . '</p>
                                <p> Дата Бронювання    -    ' . $row->Date . '</p></li>';
                                }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    
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
            if ($_COOKIE['user']!=''){
                $this_style = "../reg/exit.php";
                require './blocks/exit_command.php';}
            else if ($_COOKIE['admin']!=''){
                $this_style = "../reg/exit_admin.php";
                require './blocks/exit_command.php'; }
        ?>
        <?php require './blocks/booking_command.php'; ?>
    </script>
</body>
</html>