<?php
class dbc {
    protected function connect() {
        $host     = 'localhost';        // host
        $username = 'root';             // username
        $password = '';                 // Passwort
        $database = 'book';             // database

        // mit Datenbank verbinden
        $mysqli = new mysqli($host, $username, $password, $database);

        // fehlermeldung, falls die Verbindung fehl schlägt.
            if ($mysqli->connect_error) {
            die('Verbindungsfehler (' . $mysqli->connect_error . ') '. $mysqli->connect_error);
        }
        return $mysqli;
    }
}