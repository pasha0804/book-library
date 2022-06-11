<?php
include('../../backend/dbc.php');

class kundenmodel extends dbc {
    protected function knd_model_tbl($page) {
        $sql = "SELECT * FROM kunden ORDER BY kid ASC limit ? , 20";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $page);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    }
}