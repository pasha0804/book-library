<?php
include('../dbc.php');

use Exception;
use App\Utility;

class registermodel extends dbc {
    private static $_inputs = [
        "nachname" => [
            "required" => true
        ],
        "vorname" => [
            "required" => true
        ],
        "email" => [
            "filter" => "email",
            "required" => true,
            "unique" => "benutzer"
        ],
        "passwort" => [
            "min_characters" => 6,
            "required" => true
        ],
    ];

    protected function reg($bname, $nname, $vname, $email, $pass) {
        if (!Utility\Input::check($_POST, self::$_inputs)) {
            return false;
        }
        try {
            // Check, ob E-Mail existiert oder nicht
            $count = "count(*)";
            $sql = "SELECT '$count' FROM benutzer WHERE email=?";
            $mysqli = $this->connect();
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();

            // Falls E-Mail existiert
            if ($count > 0) {
                echo "<script>alert('Diese E-Mail existiert bereits! Versuchen Sie es mit einer anderen E-Mail oder melden Sie sich damit an.');</script>";
            } // Falls E-Mail nicht existiert
            else {
                $sql = "INSERT into benutzer(benutzername,name,vorname,email,passwort)VALUES(?,?,?,?,?)";
                $mysqli = $this->connect();
                $pass_hash = password_hash($pass, PASSWORD_BCRYPT);
                $stmti = $mysqli->prepare($sql);
                $stmti->bind_param("sssss", $bname, $nname, $vname, $email, $pass_hash);
                $stmti->execute();
                echo "<script>alert('Erfolgreich registriert! Sie können sich nun anmelden.');</script>";
                header('location:../../frontend/index.php?erfolgreich_registriert');
                $result = $stmt->get_result();

                return $result;
            }
        } catch (Exception $ex) {
            Utility\Flash::danger($ex->getMessage());
        }
        return false;
    }
}