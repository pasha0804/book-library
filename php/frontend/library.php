<?php
include('../backend/view/libraryview.php');
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style.css">
    <title>Buecherliste</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Library</a>
                    </li>
                    <?php
                        if (isset($_SESSION["admin"])) {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="custlist.php">Customers</a>
                            </li>
                            <?php
                        }
                    ?>
                </ul>
                <div style="padding-right: 0.5em">
                    <?php
                    if ($_SESSION == NULL) {
                        echo '<a href="login/login.php"><button class="btn btn-outline-success">Login</button></a>';
                    } else {
                        echo '<a href="../backend/controller/logout.php"><button class="btn btn-outline-danger">Logout</button></a>';
                    }
                    ?>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="lib">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><a href="library.php?btn=nr" onclick="event.preventDefault()">Nummer</a></th>
                <th scope="col">Katalog</th>
                <th scope="col">kurztitel</th>
                <th scope="col">kategorie</th>
                <th scope="col">Verkauft</th>
                <th scope="col">Käufer</th>
                <th scope="col">Autor</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $view = new libraryview;
            $view->lib_view();
            ?>
            </tbody>
        </table>
    </div>
</body>
