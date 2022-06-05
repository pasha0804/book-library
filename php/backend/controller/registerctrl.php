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

            if (empty($bname) || empty($nname) || empty($vname) || empty($email) || empty($pass)) {
                echo '<script>alert("Alle Felder müssen ausgefüllt sein!")</script>';
                exit();
            }

            elseif(!preg_match("/^[a-z\d_]{6,}$/i", $bname)) {
                echo "<script> alert('Error (Benutzername): Nur 6-45 Zeichen, a-z bzw. A-Z, Zahlen und _ erlaubt!')</script>";
                exit();
            }

            elseif (!preg_match("/(?=.*[a-z])(?=.*[A-Z])[a-zA-Z]/", $nname)) {
                echo "<script> alert('Error (Nachname): Nur a-z bzw. A-Z erlaubt!')</script>";
                exit();
            }

            elseif (!preg_match("/(?=.*[a-z])(?=.*[A-Z])[a-zA-Z]/", $vname)) {
                echo "<script> alert('Error (Vorname): Nur a-z bzw. A-Z erlaubt!')</script>";
                exit();
            }

            elseif (!preg_match("/(?=^.{6,}$)((?=.*\d+)(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/", $pass)) {
                echo "<script> alert('Error (Passwort): Nur ASCII-Character von Tastaturen und 6-255 Zeichen erlaubt! Mind. eine Zahl, ein spezielles Zeichen und ein Gross- bzw. ein Kleinbuchstabe erforderlich!')</script>";
                exit();
            }

            else {
                $regmodel = new registermodel();
                $result = $regmodel->reg($bname, $nname, $vname, $email, $pass);
                echo '<script>alert("Erfolgreich registriert!")</script>';
                header("location: ../../frontend/login/register.php?erfolgreich_registriert");
            }
        }
    }
}

$run = new registerctrl();
$run->regctrl();