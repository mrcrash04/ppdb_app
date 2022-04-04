<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-fluid" id="scrollspyHeading0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#scrollspyHeading0">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#scrollspyHeading1">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#scrollspyHeading2">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Formulir') ?>">Formulir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Admin') ?>">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#scrollspyHeading2"><?php echo date("Y", strtotime('-1 year')) ?> / <?php echo date("Y") ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="width:100%">

                <?php
                foreach ($admin as $key => $value) {
                    $active = ($key == 0) ? 'active' : '';
                    echo '<div class="item '  . $active . '" style="width:100%">
                                <img src="' . base_url() . 'images/' . $value->images . '" alt="..." >
                                
                            </div>';
                }
                ?>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container-fluid mt-4 text-center">
        <div class="card">
            <div class="card-header " id="scrollspyHeading1">
                Berita
            </div>
            <div class="row">
                <?php foreach ($banner as $b) : ?>
                    <div class="col-4">



                        <div class="card-body">
                            <img src="images/no_image.png" class="card-img-top" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $b->news ?></h5>
                                <p class="card-text">Some quick example text to build on the card <br>title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>

    </div>
    <div class="container-fluid mt-4">
        <div class="card " id="scrollspyHeading2">
            <div class="card-header text-center">
                Galery
            </div>
            <div class="card-body">
                <!-- Gallery -->
                <div class="row">
                    <?php foreach ($banner as $k) {
                        echo '<div class="col-lg-4 mb-4 mb-lg-0">
                                <img src="' . base_url() . 'images/' . $k->gallery . '" class="w-100 shadow-1-strong rounded mb-4">
                            </div>';
                    }
                    ?>
                </div>
                <!-- Gallery -->
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="card-header">
            <div class="footer text-center">
                <p>copyright &copy; <?php echo date("Y") ?></p>
            </div>
        </div>
    </div>

</html>