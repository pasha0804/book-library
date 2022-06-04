<?php
session_start();
include('../backend/model/login.class.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
</head>
<body>
<style>
    button a {
        color: white;
        text-decoration: none;
    }

    button a:hover {
        color: aliceblue;
    }
</style>
<!--<p>
    php
    if ($_SESSION['admin'] === NULL && $_SESSION['admin'] < 0) {
        echo "Hallo admin!";
    }
    else {
        echo 'Hallo ' . $_SESSION["benutzername"];
    }
    ?> !
</p>-->
<button type="button" class="btn btn-outline-danger"><a href="../backend/controller/logout.class.php">Ausloggen</a></button>
</body>
</html>