<?php
include('../../backend/dbc.php');

class librarymodel extends dbc {
    protected function lib_model_tbl($page, $srch) {
        $sql = "SELECT * FROM buecher, kategorien where buecher.kategorie = kategorien.id AND kurztitle LIKE ? ORDER BY buecher.nummer ASC limit ? , 20";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("si", $srch, $page);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    }
    protected function lib_model_cat($cat) {
        $sql = "SELECT * FROM buecher, kategorien where buecher.kategorie = kategorien.id  AND WHERE buecher.kategorie = ? AND kurztitle LIKE ? ORDER BY buecher.nummer ASC limit ? , 20";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("si", $cat, $srch, $page);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    }
}