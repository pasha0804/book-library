<?php
if (isset($_GET['fehler'])) {
    if ($_GET['fehler'] == 'leer') {
        echo '<script>alert("Alle Felder müssen ausgefüllt sein!")</script>';
    }

    if ($_GET['fehler'] == 'bitte_an_vorschriften_anpassen') {
        echo "<script> alert('Error: Bitte passen Sie sich an den Vorschriften an.')</script>";
    }

    if ($_GET['fehler'] == 'email_existiert_bereits') {
        echo "<script> alert('E-Mail existiert bereits! Bitte verwenden Sie eine andere E-Mail.');</script>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login-register.css" type="text/css">
    <title>Register - AY</title>
</head>
<body>
<div class="section">
    <div class="container" style="padding-bottom: 10%">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3"><span><a href="login.php" class="a-logreg">Login</a></span><span><a href="#"
                                                                                                              class="a-logreg">Register</a></span>
                    </h6>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front-reg">
                                <div class="center-wrap">
                                    <form method="post" action="../../backend/controller/registerctrl.php">
                                        <h4 class="mb-4 pb-3">Register</h4>
                                        <div class="form-group">
                                            <input name="reg-bname" class="form-style" placeholder="Benutzername"
                                                   autocomplete="off" required="required">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input name="reg-nname" class="form-style" placeholder="Nachname"
                                                   autocomplete="off" required="required">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input name="reg-vname" class="form-style" placeholder="Vorname"
                                                   autocomplete="off" required="required">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="email" name="reg-email" class="form-style" placeholder="E-Mail"
                                                   autocomplete="off" required="required">
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" name="reg-pass" class="form-style"
                                                   placeholder="Passwort" autocomplete="off"
                                                   required="required">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <button type="submit" class="btn mt-4" name="reg-btn">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
