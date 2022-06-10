<?php
include('../backend/view/custlistview.php');
session_start();
if ($_SESSION['admin'] === NULL) {
    header("location:../../index.php?kein_zugriff_erlaubt");
}
else {
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
    <link rel="stylesheet" href="../../style.css">
    <title>Buecherliste</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Customers</a>
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
                        <a class="nav-link" aria-current="page" href="library/library.php">Library</a>
                    </li>
                    <?php
                    if (isset($_SESSION["admin"])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Customers</a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <div style="padding-right: 0.5em">
                    <a href="../backend/controller/logout.php"><button class="btn btn-outline-danger">Logout</button></a>
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
                <th scope="col">K_ID</th>
                <th scope="col">Geburtstag</th>
                <th scope="col">Vorname</th>
                <th scope="col">Name</th>
                <th scope="col">Geschlecht</th>
                <th scope="col">Kunde seit</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Knt. per E-Mail</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $view = new custlistview;
            $view->c_view();
            ?>
            </tbody>
        </table>
    </div>
</body>
<?php
}
?>