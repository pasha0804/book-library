<?php
include('../model/registermodel.php');

class registerctrl extends registermodel {
    function regctrl() {

        if (isset($_POST["reg-btn"])) {
            //Getting Psot Values
            $bname = $_POST['reg-bname'];
            $nname = $_POST['reg-nname'];
            $vname = $_POST['reg-vname'];
            $email = $_POST['reg-email'];
            $pass = $_POST['reg-pass'];

            if (trim(empty($bname)) || trim(empty($nname)) || trim(empty($vname)) || trim(empty($email)) || trim(empty($pass))) {
                header('location: ../../frontend/login/register.php?fehler=leer');
                exit();
            }

            if(!preg_match("/^[a-z\d_]{6,}$/i", $bname) && !preg_match("/(?=.*[a-z])(?=.*[A-Z])[a-zA-Z]/", $nname) && !preg_match("/(?=.*[a-z])(?=.*[A-Z])[a-zA-Z]/", $vname) && !preg_match("/(?=^.{6,}$)((?=.*\d+)(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/", $pass)) {
                header('location: ../../frontend/login/register.php?fehler=bitte_an_vorschriften_anpassen');
                exit();
            }

            $regmodel = new registermodel();
            $result = $regmodel->reg($bname, $nname, $vname, $email, $pass);
            header("location: ../../frontend/login/login.php?success=erfolgreich_registriert");
        }
    }
}

$run = new registerctrl();
$run->regctrl();