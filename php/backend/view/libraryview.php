<?php
include("../../backend/model/librarymodel.php");

class libraryview extends librarymodel {
    function lib_view($page) {
        $page *= 20;
        $result = $this->lib_model_tbl($page);
        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="../../../style.css">
            <title>Buecherliste</title>
        </head>
        <h1>Seite:
            <?php
            echo $page / 20
            ?> </h1>
        <table class="table table-dark" style="font-size: 75%">
            <thead>
            <tr style="color: white" class="table-active">
                <th scope="col">Nummer</th>
                <th scope="col">Katalog</th>
                <th scope="col">kurztitel</th>
                <th scope="col">kategorie</th>
                <th scope="col">Verkauft</th>
                <th scope="col">Käufer</th>
                <th scope="col">Autor</th>
                <th scope="col">Details</th>
            </tr>
            </thead>
            <tbody>
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
                        <input class="input-border" type="hidden" value="<?php echo $item['verfasser'] ?>" name="verfasser">
                        <input class="input-border" type="hidden" value="<?php echo $item['zustand'] ?>" name="zustand">
                        <td><input type="submit" name="ew" value="Details" class="btn btn-info"></td>
                    </tr>
                </form>
                <?php
            }
            ?>
            </tbody>
        </table>
    </html>
        <?php
    }
}