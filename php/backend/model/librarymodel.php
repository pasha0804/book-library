<?php
include('../../backend/dbc.php');

class librarymodel extends dbc {
    protected function lib_model_tbl($page) {
        $sql = "SELECT * FROM buecher, kategorien where buecher.kategorie = kategorien.id ORDER BY buecher.nummer ASC limit ? , 20";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $page);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    }

    protected function lib_model_srch($srch) {
        $sql = "SELECT * FROM buecher, kategorien where buecher.kategorie = kategorien.id AND kurztitle LIKE '%$srch%' ORDER BY buecher.nummer ASC limit ? , 20";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $srch);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    }
}