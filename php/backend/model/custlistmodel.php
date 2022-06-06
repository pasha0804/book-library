<?php
include('../backend/dbc.php');

class custlistmodel extends dbc {
    protected function c_model() {
        $sql = "SELECT * FROM kunden ORDER BY kid ASC limit 20";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result;
    }
}