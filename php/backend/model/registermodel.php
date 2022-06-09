<?php
include('../dbc.php');

class registermodel extends dbc {
    protected function reg($bname, $nname, $vname, $email, $pass) {

        $sql = "SELECT count(*) FROM benutzer WHERE email=?";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();

        if($count > 0) {
            header('location: ../../frontend/login/register.php?fehler=email_existiert_bereits');
            exit();
        } else {
            $sqli = "INSERT into benutzer(benutzername,name,vorname,email,passwort)VALUES(?,?,?,?,?)";
            $mysqli = $this->connect();
            $pass_hash = password_hash($pass, PASSWORD_BCRYPT);
            $stmti = $mysqli->prepare($sqli);
            $stmti->bind_param("sssss", $bname, $nname, $vname, $email, $pass_hash);
            $stmti->execute();
            $result = $stmti->get_result();

            return $result;
        }
    }
}