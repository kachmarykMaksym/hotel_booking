<?php
    require_once './blocks/connection.php';
    $query = $pdo->query('SELECT * FROM `countries` WHERE `coutry`="'.$country.'"');
    while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '
        <div class = "column column-img">
            <div id="carousel'.$row->id.'" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="100000">
                        <img class="d-block w-100" src="'.$row->img_1.'" alt="First slide" height="280px">
                    </div>
                    <div class="carousel-item" data-interval="100000">
                        <img class="d-block w-100" src="'.$row->img_2.'" alt="First slide" height="280px">
                    </div>
                    <div class="carousel-item" data-interval="100000">
                        <img class="d-block w-100" src="'.$row->img_3.'" alt="First slide" height="280px">
                    </div>
                    <div class="carousel-item" data-interval="100000">
                        <img class="d-block w-100" src="'.$row->img_4.'" alt="First slide" height="280px">
                    </div>
                    <div class="carousel-item" data-interval="100000">
                        <img class="d-block w-100" src="'.$row->img_5.'" alt="First slide" height="280px">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel'.$row->id.'" role="button" data-slide="prev" height="280px">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel'.$row->id.'" role="button" data-slide="next" height="280px">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only next-pad">Next</span>
                </a>
            <p class="row-content12 position-center">'.$row->label.'</p>
            </div>
        </div>';
    }
?>
