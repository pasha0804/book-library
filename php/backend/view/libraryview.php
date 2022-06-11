<?php
include("../../backend/model/librarymodel.php");

class libraryview extends librarymodel
{
    function lib_view($page, $srch)
    {
        $srch = '%' . $srch . '%';
        $page = intval($page);
        $page *= 20;
        $result = $this->lib_model_tbl($page, $srch);
        ?>
        <h1>Seite:
            <?php
            echo $page / 20
            ?> </h1>
        <?php
        foreach ($result as $item) {
            ?>
            <form action="../../frontend/library/book.php" method="post">
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
                    <td><input type="submit" name="ew" value="Details" class="btn btn-info"></td>
                </tr>
            </form>
            <?php
        }
    }

    /*function lib_view_cat() {
        $result = $this->lib_model_cat();
    }*/
}