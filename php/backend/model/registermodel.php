<?php
include('../dbc.php');

class registermodel extends dbc {
    protected function reg($bname, $nname, $vname, $email, $pass) {
        
        $sql = "INSERT into benutzer(benutzername,name,vorname,email,passwort)VALUES(?,?,?,?,?)";
        $mysqli = $this->connect();
        $pass_hash = password_hash($pass, PASSWORD_BCRYPT);
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("sssss", $bname, $nname, $vname, $email, $pass_hash);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result;
    }
}