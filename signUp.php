<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    $this_style = "./css/signUp.css";
    require './blocks/head.php'; ?>
</head>

<body>
    <?php
        require './blocks/searching.php'; ?>

    <header class="myheader">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-md-9 row-content">
                    <form action="" method="post">
                        <div class = "form-group row">
                            <div class = "mx-auto col-lg-5 col-md-5 col-sm-8 mx-auto">
                                <input type="email" class = "form-control" id = "email" name = "email"
                                    placeholder = "Email">  
                            </div>
                        </div>
                        <div class = "form-group row">
                            <div class = "col-lg-5 col-md-5 col-sm-8 mx-auto">
                                <input type="password" class = "form-control" id = "password" name = "password" 
                                    required autocomplete="current-password" placeholder = "Password">  
                            </div>
                        </div>
                        <div class = "form-group row">
                            <div class = "col-lg-5 col-md-5 col-sm-8 mx-auto">
                                <input type="text" class = "form-control" id = "FirstName" name = "FirstName"
                                    placeholder = "First Name">  
                            </div>
                        </div>
                        <div class = "form-group row">
                            <div class = "col-lg-5 col-md-5 col-sm-8 mx-auto">
                                <input type="text" class = "form-control" id = "LastName" name = "LastName"
                                    placeholder = "Last Name">  
                            </div>
                        </div>
                        <div class = "form-group row">
                            <div class = "col-lg-5 col-md-5 col-sm-8 mx-auto">
                                <input type="tel" class = "form-control" id = "Phone" name = "Phone" required autocomplete="tel"
                                    placeholder = "Tel. Number">  
                            </div>
                        </div>
                        <div class = "form-group row">
                            <div class = "col-lg-5 col-md-5 col-sm-8 mx-auto">
                                <a href="./signIn.php">
                                    <button type="signUp" class = "btn btn-dark" id="singUp">
                                        Зареєструватися
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

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
        $('#singUp').click(function() {
            var email = $('#email').val();
            var pass = $('#password').val();
            var firstname = $('#FirstName').val();
            var lastname = $('#LastName').val();
            var phone = $('#Phone').val();

            $.ajax({
                url: './reg/reg.php',
                type: 'POST',
                cache: false,
                data: {'email': email, 'password': pass, 'FirstName': firstname, 'LastName': lastname, 'Phone': phone},
                dataType: 'html',
                success: function(data) {
                    if (data == 'Готово') {
                    $('#singUp').text('Все готово');
                    document.location.replace('./index.php');
                    } 
                }
            });
        });
    </script>

</body>
</html>