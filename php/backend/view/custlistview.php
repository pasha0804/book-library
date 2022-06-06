<?php
include ("../backend/model/custlistmodel.php");

class custlistview extends custlistmodel {
    function c_view() {
        $result = $this->c_model();
        foreach ($result as $item) {
            ?>
            <tr>
                <td><?php echo $item['kid'];?></td>
                <td><?php echo $item['geburtstag'];?></td>
                <td><?php echo $item['vorname'];;?></td>
                <td><?php echo $item['name'];?></td>
                <td><?php echo $item['geschlecht'];?></td>
                <td><?php echo $item['kunde_seit'];?></td>
                <td><?php echo $item['email'];?></td>
                <td><?php echo $item['kontaktpermail'];?></td>
            </tr>
            <?php
        }
    }
}