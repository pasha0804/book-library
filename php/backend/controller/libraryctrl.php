<?php
include('../model/librarymodel.php');

class libraryctrl extends librarymodel {
    public function lib_ctrl() {
        $page = 1;
        if (isset($_GET['ctrl'])) {
            header("location: ../../frontend/library/library.php?page=$page");
            $librarymodel = new librarymodel;
            $result = $librarymodel->lib_model();
        }
    }
}

$run = new libraryctrl();
$run->lib_ctrl();