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
        
    <div class="accordion col-md-12" id="accordionExample">
        <div class="card">
            <div class="card-header highlight" id="headingOne">
                <h2 class="clearfix mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Перелік усіх здійснених бронювань<i class="material-icons">  +  </i></a>
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
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>Label</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody><?php
                                require './blocks/connection_admin.php';
                                $query = $pdo->query('SELECT * FROM boocking ORDER BY ID DESC');
                                $i = 1;
                                while($row = $query->fetch(PDO::FETCH_OBJ)){
                                    echo '<tr>
                                    <td>' . $i . '</td>
                                    <td>' . $row->ID . '</td>
                                    <td>' . $row->Email . '</td>
                                    <td>' . $row->Country . '</td>
                                    <td>' . $row->Label . '</td>
                                    <td>' . $row->Date . '</td>
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
    </div>


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
</script>



</body>
</html>