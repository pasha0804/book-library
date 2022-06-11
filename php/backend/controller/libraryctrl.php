<?php
include('../model/librarymodel.php');

class libraryctrl extends librarymodel
{
    public function lib_ctrl_pages($page = 0)
    {
        if (isset($_POST['next'])) {
            $page++;
            header('location: ../../frontend/library/library.php?page=' . $page);
        }

        if (isset($_POST['prev'])) {
            $page--;
            header('location: ../../frontend/library/library.php?page=' . $page);
        }
        if (isset($_POST['srch'])) {
            $srch = $_POST['srch'];
            $srch = preg_replace("#[^0-9a-z]#i", "", $srch);
            $result = $this->lib_model_srch($srch);
            $view = new libraryview;
            $view->lib_view_srch();
        } else {
            $view = new libraryview;
            $view->lib_view($_GET['page']);
        }
    }
}

$run = new libraryctrl();
$run->lib_ctrl_pages($_GET['page']);