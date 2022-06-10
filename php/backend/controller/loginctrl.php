<?php
include('../model/loginmodel.php');

class loginctrl extends loginmodel {
    public function logctrl() {
        if (isset($_POST["login-btn"])) {
            if (empty($_POST["log-email"]) || empty($_POST["log-pass"])) {
                echo '<script>alert("Both Fields are required")</script>';
                exit();
            }

            $pass = $_POST["log-pass"];
            $email = $_POST["log-email"];

            $loginmodel = new loginmodel();
            $result = $loginmodel->log($email);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    if (password_verify($pass, $row["passwort"])) {
                        //return true;
                        session_start();
                        $_SESSION["id"] = $row['id'];
                        $_SESSION["vorname"] = $row['vorname'];
                        $_SESSION["name"] = $row['name'];
                        $_SESSION["benutzername"] = $row['benutzername'];
                        $_SESSION["admin"] = $row['admin'];
                        header("location:../../../index.php");
                        exit();
                    } else {
                        //return false;
                        echo '<script>alert("Error: Login Daten sind falsch!")</script>';
                        header("location:../../frontend/login/login.php");
                    }
                }
            } else {
                echo '<script>alert("Error: Login Daten sind falsch!")</script>';
                header("location:../../frontend/login/login.php");
            }
        }
    }
}

$run = new loginctrl();
$run->logctrl();