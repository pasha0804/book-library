<?php
include('../model/librarymodel.php');

class libraryctrl extends librarymodel {
    public function lib_ctrl_pages($page = 0) {
        if (isset($_POST['next'])) {
            $page++;
            if (isset($_POST['srch'])) {
                $srch = $_POST['srch'];
                header("location: ../../frontend/library/library.php?srch=$srch&page=$page");
                exit();
            }
            header("location: ../../frontend/library/library.php?page=$page");
        }

        if (isset($_POST['prev'])) {
            $page--;
            if (isset($_POST['srch'])) {
                $srch = $_POST['srch'];
                header("location: ../../frontend/library/library.php?srch=$srch&page=$page");
                exit();
            }
            header("location: ../../frontend/library/library.php?page=$page");
        }
        if (isset($_POST['srch'])) {
            $srch = $_POST['srch'];
            header("location: ../../frontend/library/library.php?srch=$srch&page=$page");
        }

        
    }
}

$run = new libraryctrl();
$run->lib_ctrl_pages($_GET['page']);