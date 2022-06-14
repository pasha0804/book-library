<?php
include('../model/librarymodel.php');

class libraryctrl extends librarymodel {
    public function lib_ctrl_pages($page = 0) {
        if (isset($_POST['next'])) {
            $page++;
            $cat = $_GET['cat'];
            $srch = $_GET['srch'];
            header("location: ../../frontend/library/library.php?srch=$srch&page=$page&cat=$cat");
            exit();
        }

        if (isset($_POST['prev'])) {
            $page--;
            $cat = $_GET['cat'];
            $srch = $_GET['srch'];
            header("location: ../../frontend/library/library.php?srch=$srch&page=$page&cat=$cat");
            exit();
        }

        if (isset($_POST['srch']) || isset($_POST['cat'])) {
            $cat = $_POST['cat'];
            $srch = $_POST['srch'];
            header("location: ../../frontend/library/library.php?srch=$srch&page=$page&cat=$cat");
        }

        if (isset($_POST['back'])) {
            $cat = $_GET['cat'];
            $srch = $_GET['srch'];
            header("location: ../../frontend/library/library.php?srch=$srch&page=$page&cat=$cat");
        }
    }
}

$run = new libraryctrl();
$run->lib_ctrl_pages($_GET['page']);