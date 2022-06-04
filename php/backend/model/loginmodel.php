<?php
include('../dbc.php');

class loginmodel extends dbc {
    protected function log($email) {
        $sql = "SELECT * FROM benutzer WHERE email = ?";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result;
    }
}