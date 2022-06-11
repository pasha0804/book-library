<?php
include("../../backend/model/kundenmodel.php");

class kundenview extends kundenmodel
{
    function knd_view($page)
    {
        $page *= 20;
        $result = $this->knd_model_tbl($page);
        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
                  crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
                    crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.js"
                    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="../../../style.css">
            <title>Buecherliste</title>
        </head>
        <h1>Seite:
            <?php
            echo $page / 20
            ?> </h1>
        <table class="table table-dark" style="color: white; font-size: 75%">
            <thead>
            <tr class="table-active">
                <th scope="col">K_ID</th>
                <th scope="col">Geburtstag</th>
                <th scope="col">Vorname</th>
                <th scope="col">Name</th>
                <th scope="col">Geschlecht</th>
                <th scope="col">Kunde seit</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Knt. per E-Mail</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($result as $item) {
                ?>
                <tr>
                    <td><?php echo $item['kid']; ?></td>
                    <td><?php echo $item['geburtstag']; ?></td>
                    <td><?php echo $item['vorname'];; ?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['geschlecht']; ?></td>
                    <td><?php echo $item['kunde_seit']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td><?php
                        if ($item['kontaktpermail'] == '0') {
                            echo "Nein";
                        }
                        else {
                            echo "Ja";
                        }
                    ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        </html>
        <?php
    }

    /*function lib_view_srch($srch) {
        $result = $this->lib_model_srch($srch);
        ?>
        <table class="table">
            <thead>
            <tr style="color: white">
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
                <tr style="color: white">
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
    }*/
}