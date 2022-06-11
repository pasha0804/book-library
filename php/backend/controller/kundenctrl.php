<?php
include('../model/kundenmodel.php');

class kundenctrl extends kundenmodel
{
    public function knd_ctrl_pages($page = 0)
    {
        if (isset($_POST['next'])) {
            $page++;
            header('location: ../../frontend/kunden/kunden.php?page=' . $page);
        }

        if (isset($_POST['prev'])) {
            $page--;
            header('location: ../../frontend/kunden/kunden.php?page=' . $page);
        }
    }
}

$run = new kundenctrl();
$run->knd_ctrl_pages($_GET['page']);