<?php
include('../../backend/dbc.php');

class librarymodel extends dbc {
    protected function lib_model_tbl($page, $srch, $cat1, $cat2) {
        $sql = "SELECT * FROM buecher, kategorien where buecher.kategorie = kategorien.id AND kurztitle LIKE ? AND buecher.kategorie BETWEEN ? AND ? ORDER BY buecher.nummer ASC limit ? , 20";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("siii", $srch, $cat1, $cat2, $page);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    }
}