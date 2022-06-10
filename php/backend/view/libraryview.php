<?php
include ("../../backend/model/librarymodel.php");

class libraryview extends librarymodel {
    function lib_view($page) {
        $page *= 20;
        $result = $this->lib_model_tbl($page);
        ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nummer</th>
                <th scope="col">Katalog</th>
                <th scope="col">kurztitel</th>
                <th scope="col">kategorie</th>
                <th scope="col">Verkauft</th>
                <th scope="col">Käufer</th>
                <th scope="col">Autor</th>
            </tr>
            </thead>
                <tbody>
                    <?php
                    foreach ($result as $item) {
                    ?>
                        <tr>
                            <td><?php echo $item['nummer'];?></td>
                            <td><?php echo $item['katalog'];?></td>
                            <td><?php echo $item['kurztitle'];;?></td>
                            <td><?php echo $item['kategorie'];?></td>
                            <td><?php echo $item['verkauft'];?></td>
                            <td><?php echo $item['kaufer'];?></td>
                            <td><?php echo $item['autor'];?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php
    }
}