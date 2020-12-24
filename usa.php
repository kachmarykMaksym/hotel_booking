<!DOCTYPE html>
<html>
<head>
    <?php 
    $this_style = "./css/usa.css";
    require './blocks/head.php'; ?>
</head>

<body>
    <?php   
        $country = "usa";
        if ($_COOKIE['user']=='' && $_COOKIE['admin']=='') {
            require './blocks/searching.php';
        } else if ($_COOKIE['user']!='') {
            require './blocks/searching_user.php';
        } else if ($_COOKIE['admin']!='') {
            require './blocks/searching_admin.php';
        } 
        
        $country_name = "США";
        $country_text = "Подорож у США легко ламає стереотипи, що склалися про цю країну. Тут кожен відкриває свою Америку, 
        яка щедро обдаровує мандрівника всім, про що він тільки міг мріяти.  Яскравий колорит кожного штату, 
        етнічні особливості і традиції, а також велика кількість розваг робить відпочинок в Америці насиченим і незабутнім.";
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46889.60705160774!2d-77.05915894206139!3d38.9042488
            2237493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c6de5af6e45b%3A0xc2524522d4885d2a!2z0JLQsNGI0LjQvdCz0Y
            LQvtC9LCDQntC60YDRg9CzINCa0L7Qu9GD0LzQsdGW0Y8sINCh0L_QvtC70YPRh9C10L3RliDQqNGC0LDRgtC4INCQ0LzQtdGA0LjQutC4!5e0!3m2!1suk
            !2sua!4v1607093123872!5m2!1suk!2sua" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" 
            aria-hidden="false" tabindex="0"></iframe>
            </div>
    </div>
    
    <div class="container">
        <div class="video">
            <iframe width="100%" height="550" src="https://www.youtube.com/embed/74vuuey4mrM" frameborder="0" 
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
        <?php require './blocks/booking_command.php'; ?>
    </script>
    
</body>
</html>