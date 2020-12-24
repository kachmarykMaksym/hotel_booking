<!DOCTYPE html>
<html>
<head>
    <?php 
    $this_style = "./css/styles.css";
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


    <header class="myheader">
        <div class="container">
            <div class="row row-header col-sm-9">
                <div class="col-lg-7 col-md-7 col-sm-10 header-content">
                    <h1 class = "row-back">Подорожуй зі зручністю</h1>
                </div>
            </div>
        </div>
    </header>
    

    <div class = "container col-lg-8 col-md-8 col-sm-12">
        <div class = "row align-items-center col-lg-10 col-md-10 col-sm-12">
            <div>
                <h4 class = "row-content0 myPadding2">
                    Привіт! У цій статті я розповім кілька цікавих речей та місць в Японії, тому, 
                    потрапивши сюди (незалежно від того, в який сезон), ви будете знати,
                    що робити і куди поїхати. Тому просто відпочивайте та насолоджуйтесь.
                </h4>
            </div>
        </div>
    </div>

    <div class = "container myPadding">
        <div class = "row">
            <a href="./japan.php" class="column">
                <div class = "col-sm-12 col-sm-offset-1">
                    <img src="./img/japan_index.jpg" alt="Winter" style="height: 200px; width: 100%">
                    <p class = "row-content10">Японія</p>
                </div>
            </a>
            <a href="./turkey.php" class="column">
                <div class = "col-sm-12 col-sm-offset-1">
                    <img src="./img/turkey_index.jpg" alt="Spring" style="height: 200px; width: 100%">
                    <p class = "row-content10">Туреччина</p>
                </div>
            </a>
            <a href="./usa.php" class="column">
                <div class = "col-sm-12 col-sm-offset-1">
                    <img src="./img/usa_index.jpg" alt="Summer" style="height: 200px; width: 100%;">
                    <p class = "row-content10">США</p>
                </div>
            </a>
        </div>
        <div class = "row">
            <a href="#" class="column">
                <div class = "col-sm-12 col-sm-offset-1">
                    <img src="./img/scotland_index.jpg" alt="Autumn" style="height: 200px; width: 100%">
                    <p class = "row-content10">Ірландія</p>
                </div>
            </a>
            <a href="./egypt.php" class="column">
                <div class = "col-sm-12 col-sm-offset-1">
                    <img src="./img/egypt_index.jpg" alt="Autumn" style="height: 200px; width: 100%">
                    <p class = "row-content10">Єгипет</p>
                </div>
            </a>
        </div>
    </div>
    
    <div class="container">
        <div class="video">
            <iframe width="100%" height="560" src="https://www.youtube.com/embed/rUORP_rL74c" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            if ($_COOKIE['user']!=''){
                $this_style = "../reg/exit.php";
                require './blocks/exit_command.php';}
            else if ($_COOKIE['admin']!=''){
                $this_style = "../reg/exit_admin.php";
                require './blocks/exit_command.php'; }
        ?>
    </script>

</body>
</html>