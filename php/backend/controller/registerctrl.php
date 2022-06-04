<?php
class registerctrl extends registermodel {
    function regctrl() {
        if (isset($_POST["reg-btn"])) {
            //Getting Psot Values
            $bname = $_POST['reg-bname'];
            $nname = $_POST['reg-nname'];
            $vname = $_POST['reg-vname'];
            $email = $_POST['reg-email'];
            $pass = $_POST['reg-pass'];

            $regmodel = new registermodel();
            $result = $regmodel->reg($bname, $nname, $vname, $email, $pass);

            if (empty($_POST[$bname]) || empty($_POST[$nname]) || empty($_POST($vname)) || empty($_POST($email)) || empty($_POST($pass))) {
                echo '<script>alert("Alle Felder müssen ausgefüllt sein!")</script>';
                exit();
            }
            else {
                if(isset ($bname) && !empty(trim($bname)) && strlen(trim($bname)) <= 45) {
                    $bname_trim = trim($bname);
                    // entspricht der benutzername unseren vogaben (minimal 6 Zeichen, Gross- und Kleinbuchstaben)
                    if(!preg_match("/^[a-z\d_]{6,}$/i", $bname_trim)) {
                        echo "Error (Benutzername): Nur 6-45 Zeichen, a-z bzw. A-Z, Zahlen und _ erlaubt!";
                    }
                } else {
                    // Ausgabe Fehlermeldung
                    echo "Bitte verwenden Sie einen gültigen Benutzernamen!";
                }

                if(isset($nname) && !empty(trim($nname)) && strlen(trim($nname)) <= 100) {
                    $nname_trim = trim($nname);
                    // entspricht der benutzername unseren vogaben (minimal 6 Zeichen, Gross- und Kleinbuchstaben)
                    if(!preg_match("/(?=.*[a-z])(?=.*[A-Z])[a-zA-Z]{6,}/", $nname_trim)){
                        echo "Error (Nachname): Nur 6-100 Zeichen und a-z bzw. A-Z erlaubt!";
                    }
                } else {
                    // Ausgabe Fehlermeldung
                    echo "Bitte verwenden Sie einen gültigen Nachnamen!";
                }

                if(isset($vname) && !empty(trim($vname)) && strlen(trim($vname)) <= 100) {
                    $vname_trim = trim($vname);
                    // entspricht der benutzername unseren vogaben (minimal 6 Zeichen, Gross- und Kleinbuchstaben)
                    if(!preg_match("/(?=.*[a-z])(?=.*[A-Z])[a-zA-Z]{6,}/", $vname_trim)){
                        echo "Error (Vorname): Nur mind. 6 Zeichen und a-z bzw. A-Z erlaubt!";
                    }
                } else {
                    // Ausgabe Fehlermeldung
                    echo "Bitte verwenden Sie einen gültigen Vornamen!";
                }

                if(isset($pass) && !empty(trim($pass)) && strlen(trim($pass)) <= 255) {
                    // entspricht das passwort unseren vorgaben? (minimal 8 Zeichen, Zahlen, Buchstaben, keine Zeilenumbrüche, mindestens ein Gross- und ein Kleinbuchstaben)
                    if(!preg_match("/(?=^.{6,}$)((?=.*\d+)(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/", $pass)){
                        echo "Error (Passwort): Nur ASCII-Character von Tastaturen und 6-255 Zeichen erlaubt! Mind. eine Zahl, ein spezielles Zeichen und ein Gross- bzw. ein Kleinbuchstabe erforderlich!";
                        exit();
                    }
                } else {
                    // Ausgabe Fehlermeldung
                    echo "Bitte verwenden Sie ein gültiges Passwort!";
                }
            }
        }
    }
}

$run = new registerctrl();
$run->regctrl();