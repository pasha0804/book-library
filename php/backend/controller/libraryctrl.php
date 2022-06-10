<?php
include('../model/librarymodel.php');

class libraryctrl extends librarymodel {
    public function lib_ctrl_pages($page = 0) {
        if (isset($_POST['next'])) {
            $page++;
            header('location: ../../frontend/library/library.php?page=' . $page);
        }

        if (isset($_POST['prev'])) {
            $page--;
            header('location: ../../frontend/library/library.php?page=' . $page);
        }
    }

    public function lib_ctrl_srch() {
        if (isset($_GET['srch']) && $_GET['srch'] != '') {
            $srch = trim($_GET['srch']);

            $query_string = "SELECT * FROM buecher, kategorien WHERE ";

            $keywords = explode('', $srch);
            foreach ($keywords as $word) {
                $query_string .= " katalog LIKE '%".$word."%' OR ";
            }
            $query_string = substr($query_string, 0, strlen($query_string) - 3);

            echo $query_string;
        }
    }
}

$run = new libraryctrl();
$run->lib_ctrl_pages($_GET['page']);

$run = new libraryctrl();
$run->lib_ctrl_srch();