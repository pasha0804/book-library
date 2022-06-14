<?php
include("../../backend/model/librarymodel.php");

class libraryview extends librarymodel
{
    function lib_view($page, $srch, $cat)
    {
        $srch = '%' . $srch . '%';
        $page = intval($page);
        $page *= 20;
        $cat2 = $cat;
        if ($cat == 0) {
            $cat2 = 100;
        }
        $result = $this->lib_model_tbl($page, $srch, $cat, $cat2);
        ?>
        <h1>Seite:
            <?php
            echo $page / 20
            ?> </h1>
        <?php
        foreach ($result as $item) {
            ?>
            <form action="../../frontend/library/book.php?
            <?php
            if (isset($_GET['srch'])) {
                echo 'srch=' . $_GET['srch'] . '&';
            }
            if (isset($_GET['page'])) {
                echo 'page=' . $_GET['page'] . '&';
            }
            if (isset($_GET['cat'])) {
                echo 'cat=' . $_GET['cat'];
            }
            ?>" method="post">
                <tr>
                    <td><input class="input-border" value="<?php echo $item['nummer']; ?>"
                               name="nummer" readonly="readonly" type="text" style="width: 2.5vw">
                    </td>
                    <td><input class="input-border" value="<?php echo $item['katalog']; ?>"
                               name="katalog" readonly="readonly" type="text" style="width: 2.5vw">
                    </td>
                    <td><input class="input-border" value="<?php echo $item['kurztitle']; ?>"
                               name="kurztitle" readonly="readonly" type="text" style="width: 15vw">
                    </td>
                    <td><input class="input-border" value="<?php echo $item['kategorie']; ?>"
                               name="kategorie" readonly="readonly" type="text" style="width: 30vw">
                    </td>
                    <td><input class="input-border" value="<?php echo $item['verkauft']; ?>"
                               name="verkauft" readonly="readonly" type="text" style="width: 5vw">
                    </td>
                    <td><input class="input-border" value="<?php echo $item['kaufer']; ?>"
                               name="kaufer" readonly="readonly" type="text" style="width: 5vw">
                    </td>
                    <td><input class="input-border" value="<?php echo $item['autor']; ?>" name="autor"
                               readonly="readonly" type="text" style="width: 15vw"></td>
                    <input class="input-border" type="hidden" value="<?php echo $item['title'] ?>" name="title">
                    <input class="input-border" type="hidden" value="<?php echo $item['verfasser'] ?>"
                           name="verfasser">
                    <input class="input-border" type="hidden" value="<?php echo $item['zustand'] ?>" name="zustand">
                    <td><input type="submit" name="details-btn" value="Details" class="btn btn-info"></td>
                </tr>
            </form>
            <?php
        }
    }

    /*function lib_view_cat() {
        $result = $this->lib_model_cat();
    }*/
}