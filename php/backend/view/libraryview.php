<?php
include ("../backend/model/librarymodel.php");

class libraryview extends librarymodel {
    function lib_view() {
        $result = $this->lib_model();
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
    }
}