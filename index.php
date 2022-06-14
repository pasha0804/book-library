<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Index</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="php/frontend/library/library.php?page=0&srch=&cat=0">Library</a>
                    </li>
                    <?php
                    if (isset($_SESSION["admin"])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="php/frontend/kunden/kunden.php?page=0">Kunden</a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div style="color: black; padding-right: 1%">
                <?php
                if (isset($_SESSION['benutzername']) && $_SESSION['benutzername'] != 1) {
                    echo "Eingeloggt als: " . $_SESSION['benutzername'];
                }
                if (isset($_SESSION['admin']) && $_SESSION['benutzername'] == "1") {
                    echo "Eingeloggt als: " . $_SESSION['admin'];
                }
                if ($_SESSION == NULL) {
                    echo "Sie sind nicht eingeloggt!";
                }
                ?>
            </div>
            <div style="padding-right: 0.5em">
                <?php
                if ($_SESSION == NULL) {
                    echo '<a href="php/frontend/login/login.php"><button class="btn btn-outline-success">Login</button></a>';
                } else {
                    echo '<a href="php/backend/controller/logout.php"><button class="btn btn-outline-danger">Logout</button></a>';
                }
                ?>
            </div>
        </div>
        </div>
    </nav>
</header>
    <div id="main-div">
        <?php
        if ($_SESSION == NULL) {
            echo "Hallo Fremder! Willkommen zur Website M120 von Alperen Y. und Connor F.";
        }
        else {
            if (isset($_SESSION['admin'])) {
                echo "Hallo admin!";
            }
            else {
                echo 'Hallo ' . $_SESSION["benutzername"];
            }
        }
        ?>
        <p>hoi</p>
    </div>
</body>
</html>
