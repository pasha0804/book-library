<?php
include('../../backend/view/libraryview.php');
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../style.css">
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
                        <a class="nav-link" aria-current="page" href="../../../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=0&srch=&cat=0">Library</a>
                    </li>
                    <?php
                    if (isset($_SESSION["admin"])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../kunden/kunden.php?page=0">Kunden</a>
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
                    echo '<a href="../login/login.php"><button class="btn btn-outline-success">Login</button></a>';
                } else {
                    echo '<a href="../../backend/controller/logout.php"><button class="btn btn-outline-danger">Logout</button></a>';
                }
                ?>
            </div>
        </div>
        </div>
    </nav>
</header>
<div class="lib">
    <form class="d-flex" role="search" method="post" action="../../backend/controller/libraryctrl.php"
          style="padding-bottom: 5%">
        <div class="div-form">
            <div class="lib-srch">
                <h2>Filter</h2>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="srch">
                <br/>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="cat">
                    <option value="0" name="default" selected>Wählen Sie eine Kategorie aus</option>
                    <option value="1" name="altedrucke">Alte Drucke, Bibeln, Klassische Autoren in den Originalsprachen</option>
                    <option value="2" name="geo">Geographie und Reisen</option>
                    <option value="3" name="gsws">Geschichtswissenschaften</option>
                    <option value="4" name="nws">Naturwissenschaften</option>
                    <option value="5" name="kinder">Kinderbücher</option>
                    <option value="6" name="modlit">Moderne Literatur und Kunst</option>
                    <option value="7" name="modkunst">Moderne Kunst und K?nstlergraphik</option>
                    <option value="8" name="kws">Kunstwissenschaften</option>
                    <option value="9" name="arch">Architektur</option>
                    <option value="10" name="tech">Technik</option>
                    <option value="11" name="nwsmed">Naturwissenschaften - Medizin</option>
                    <option value="12" name="ozean">Ozeanien</option>
                    <option value="13" name="afrika">Afrika</option>
                </select>
                <!--
                if (isset($_GET['cat'])) {
                    $cat = $_GET['cat'];
                }

                $view->lib_view_cat($cat);
                -->
            </div>
            <br/>
            <div class="lib-submit">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </div>
    </form>
    <div class="lib-pages-btn">
        <form action="../../backend/controller/libraryctrl.php?page=
        <?php
        if (isset($_GET['srch'])) {
            echo 'srch=' . $_GET['srch'] . '&';
        }
        if (isset($_GET['page'])) {
            echo 'page=' . $_GET['page'] . '&';
        }
        if(isset($_GET['cat'])) {
            echo 'cat=' . $_GET['cat'];
        }
        ?>" name="form-tbl"
              method="POST">
            <input type="submit" name="prev" id="prev-btn" value="← Previous" class="btn btn-outline-danger"
                <?php
                if (isset($_GET['page'])) {
                    if ($_GET['page'] == 0) {
                        ?>
                        style="display: none"
                        <?php
                    }
                }
                ?>
            />
            <input type="submit" name="next" id="next-btn" value="Next →" class="btn btn-outline-success"/>
        </form>
    </div>
    <table class="table table-dark" style="font-size: 75%">
        <thead>
        <tr style="color: white" class="table-active">
            <th scope="col">Nummer</th>
            <th scope="col">Katalog</th>
            <th scope="col">kurztitel</th>
            <th scope="col">kategorie</th>
            <th scope="col">Verkauft</th>
            <th scope="col">Käufer</th>
            <th scope="col">Autor</th>
            <th scope="col">Details</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (isset($_GET['srch'])) {
            $srch = $_GET['srch'];
        } else {
            $srch = "%";
        }
        $view = new libraryview;
        $view->lib_view($_GET['page'], $srch, $_GET['cat']);
        ?>
        </tbody>
    </table>
</div>
</body>