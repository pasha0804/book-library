<?php
include('../backend/b-register.php');
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

    <link rel="stylesheet" href="../../css/logreg.css">
    <title>Home - AY</title>
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');

body {
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
    font-size: 15px;
    line-height: 1.7;
    color: #c4c3ca;
    background-color: #1f2029;
    overflow-x: hidden;
}

a {
    cursor: pointer;
    transition: all 200ms linear;
}

a:hover {
    text-decoration: none;
}

.link {
    color: #c4c3ca;
}

.link:hover {
    color: #ffeba7;
}

p {
    font-weight: 500;
    font-size: 14px;
    line-height: 1.7;
}

h6 span {
    padding: 0 20px;
    text-transform: uppercase;
    font-weight: 700;
}

.section {
    position: relative;
    width: 100%;
    display: block;
}

.full-height {
    min-height: 100vh;
}

.card-3d-wrap {
    position: relative;
    width: 440px;
    max-width: 100%;
    height: 400px;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    perspective: 800px;
    margin-top: 60px;
}

.card-3d-wrapper {
    width: 100%;
    height: 100%;
    position:absolute;
    top: 0;
    left: 0;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transition: all 600ms ease-out;
}

.card-front {
    width: 100%;
    height: 100%;
    background-color: #2a2b38;
    background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
    background-position: bottom center;
    background-repeat: no-repeat;
    background-size: 300%;
    position: absolute;
    border-radius: 6px;
    left: 0;
    top: 0;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;
}

.card-front-reg {
    width: 100%;
    height: 150%;
    background-color: #2a2b38;
    background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
    background-position: bottom center;
    background-repeat: no-repeat;
    background-size: 300%;
    position: absolute;
    border-radius: 6px;
    left: 0;
    top: 0;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;
}

.checkbox:checked ~ .card-3d-wrap .card-3d-wrapper {
    transform: rotateY(180deg);
}

.center-wrap {
    position: absolute;
    width: 100%;
    padding: 0 35px;
    top: 50%;
    left: 0;
    transform: translate3d(0, -50%, 35px) perspective(100px);
    z-index: 20;
    display: block;
}

.form-group {
    position: relative;
    display: block;
    margin: 0;
    padding: 0;
}

.form-style {
    padding: 13px 20px;
    padding-left: 55px;
    height: 48px;
    width: 100%;
    font-weight: 500;
    border-radius: 4px;
    font-size: 14px;
    line-height: 22px;
    letter-spacing: 0.5px;
    outline: none;
    color: #c4c3ca;
    background-color: #1f2029;
    border: none;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
}

.form-style:focus,
.form-style:active {
    border: none;
    outline: none;
    box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
}

.input-icon {
    position: absolute;
    top: 0;
    left: 18px;
    height: 48px;
    font-size: 24px;
    line-height: 48px;
    text-align: left;
    color: #ffeba7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.form-group input:-ms-input-placeholder {
    color: #c4c3ca;
    opacity: 0.7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.form-group input::-moz-placeholder {
    color: #c4c3ca;
    opacity: 0.7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.form-group input:-moz-placeholder {
    color: #c4c3ca;
    opacity: 0.7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.form-group input::-webkit-input-placeholder {
    color: #c4c3ca;
    opacity: 0.7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.form-group input:focus:-ms-input-placeholder {
    opacity: 0;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.form-group input:focus::-moz-placeholder {
    opacity: 0;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.form-group input:focus:-moz-placeholder  {
    opacity: 0;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.form-group input:focus::-webkit-input-placeholder  {
    opacity: 0;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
}

.btn {
    border-radius: 4px;
    height: 44px;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    -webkit-transition : all 200ms linear;
    transition: all 200ms linear;
    padding: 0 30px;
    letter-spacing: 1px;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    -ms-flex-pack: center;
    text-align: center;
    border: none;
    background-color: #ffeba7;
    color: #102770;
    box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);
}

.btn:active,
.btn:focus {
    background-color: #102770;
    color: #ffeba7;
    box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}

.btn:hover {
    background-color: #102770;
    color: #ffeba7;
    box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}

.a-logreg {
    text-decoration: none;
}

::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    background-color: #ebebeb;
    -webkit-border-radius: 10px;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #6d6d6d;
}
</style>
<div class="section">
    <div class="container" style="padding-bottom: 10%">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3"><span><a href="index.php" class="a-logreg">Login</a></span><span><a href="#" class="a-logreg">Register</a></span></h6>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front-reg">
                                    <div class="center-wrap">
                                        <form method="post">
                                            <h4 class="mb-4 pb-3">Register</h4>
                                            <div class="form-group">
                                                <input name="reg-bname" class="form-style" placeholder="Benutzername" name="reg-bname" autocomplete="off" required="required">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input name="reg-nname" class="form-style" placeholder="Nachname" name="reg-nname" autocomplete="off" required="required">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input name="reg-vname" class="form-style" placeholder="Vorname" name="reg-vname" autocomplete="off" required="required">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="email" name="reg-email" class="form-style" placeholder="E-Mail" name="reg-email" autocomplete="off" required="required">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="reg-pass" class="form-style" placeholder="Passwort" name="reg-pass" autocomplete="off" required="required">
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
