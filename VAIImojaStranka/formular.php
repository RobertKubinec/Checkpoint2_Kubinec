<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/Forum.css">

    <title>Fórum</title>
</head>
<body>
<!--Navigacia/horna lista-->
<nav class="navbar navbar-expand-md bg-warning navbar-light">
    <!-- Brand -->
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="HlavnaStranka.php">Domov</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="HTML/FaktyOSlovensku.html">Fakty o Slovensku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="HTML/TuristickaMapaSR.html">Turistická mapa SR</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Kam na VÝLET
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Hrady a zámky</a>
                    <a class="dropdown-item" href="#">Historické pamiatky</a>
                    <a class="dropdown-item" href="#">Jaskyne</a>
                    <a class="dropdown-item" href="HTML/Rozhladne.html">Rozhľadne</a>
                    <a class="dropdown-item" href="#">Kúpele</a>
                    <a class="dropdown-item" href="#">Skanzeny</a>
                    <a class="dropdown-item" href="#">Náboženské pamiatky</a>
                    <a class="dropdown-item" href="#">Národné parky</a>
                    <a class="dropdown-item" href="#">Náboženské pamiatky</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Galéria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="formular.php">Fórum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="zoznam.php">Obsah fóra</a>
            </li>
        </ul>
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
    </form>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <h1 class="text-center">Fórum pre turistov</h1>
            <hr style="height: 1px;color: black;background-color: black;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <?php

            include 'proces.php';
            $proces = new Proces();
            $insert = $proces->vloz();
            //header("Location: zoznam.php");
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Meno</label>
                    <input type="text" name="name" class="form-control" pattern="[A-Za-z]{1,100}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="destination">Destinácia</label>
                    <input type="text" name="destination" class="form-control" pattern="[A-Za-z]{1,100}" required>
                </div>
                <div class="form-group">
                    <label for="comment">Komentár</label>
                    <textarea name="comment" id="" cols="" rows="3" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Odošli</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>