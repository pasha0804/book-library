<?php
include('../backend/dbc.php');

class librarymodel extends dbc {
    protected function b_model() {
        $sql = "SELECT * FROM buecher, kategorien where buecher.kategorie = kategorien.id ORDER BY buecher.id ASC limit 20";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result;
    }
}