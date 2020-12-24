<!DOCTYPE html>
<html>
<head>
    <?php 
    $this_style = "./css/turkey.css";
    require './blocks/head.php'; ?>
</head>

<body>
    <?php   
        $country = "turkey";
        if ($_COOKIE['user']=='' && $_COOKIE['admin']=='') {
            require './blocks/searching.php';
        } else if ($_COOKIE['user']!='') {
            require './blocks/searching_user.php';
        } else if ($_COOKIE['admin']!='') {
            require './blocks/searching_admin.php';
        }

        $country_name = "Туреччина";
        $country_text = "Турецькі краєвиди подібні живим картинам. Турецька архітектура вражає та 
        назавжди залишає слід у пам'яті. Турецькі традиції та культура — ніби 
        скарбниця із дорогоцінностями, що відкривається не кожному.";
        require './blocks/header.php';
    ?>
 
    <?php  
        if ($_COOKIE['user']!='') {
            require './blocks/booking.php';
    } ?>  

    <div class = "container myPadding">
        <?php require './blocks/carousel.php'; ?>
    </div>

    <div class="container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385398.5898034751!2d28.731992895837653!3d41.00498228313808!2m3
            !1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2z0KHRgtCw0LzQsdGD0LssINCi0YPRgNC10YfRh9C4
            0L3QsA!5e0!3m2!1suk!2sua!4v1607091468565!5m2!1suk!2sua" width="100%" height="450" frameborder="0" style="border:0;" 
            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
    </div>
    
    <div class="container">
        <div class="video">
        <iframe width="100%" height="550" src="https://www.youtube.com/embed/x5rxg0rXI2g" frameborder="0" allow="accelerometer; 
        autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
        <?php require './blocks/booking_command.php'; ?>
    </script>
</body>
</html>