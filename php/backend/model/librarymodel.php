<?php
include('../backend/dbc.php');

class librarymodel extends dbc {
    protected function lib_model() {

        if(isset($_GET['btn'])) {
            if ($_GET['btn'] == 'nr') {
                $sql_sort_nr = "SELECT * FROM buecher, kategorien where buecher.kategorie = kategorien.id ORDER BY buecher.id ASC limit 20";
                $mysqli = $this->connect();
                $stmt = $mysqli->prepare($sql_sort_nr);
                $stmt->execute();
                $result = $stmt->get_result();
            }
        }

        $sql_show = "SELECT * FROM buecher, kategorien where buecher.kategorie = kategorien.id ORDER BY buecher.id ASC limit 20";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare($sql_show);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result;
    }
}