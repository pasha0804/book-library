<?php
class registerctrl extends registermodel {
    function regctrl() {
        if (isset($_POST["reg-btn"])) {
            //Getting Psot Values
            $bname = $_POST['reg-bname'];
            $nname = $_POST['reg-nname'];
            $vname = $_POST['reg-vname'];
            $email = $_POST['reg-email'];
            $pass = $_POST['reg-pass'];

            if (empty($_POST[$bname]) || empty($_POST[$nname]) || empty($_POST($vname)) || empty($_POST($email)) || empty($_POST($pass))) {
                echo '<script>alert("Alle Felder müssen ausgefüllt sein!")</script>';
                exit();
            }
        }
    }
}

$run = new registerctrl();
$run->regctrl();