<?php
require __DIR__ . '/Models/Product.php';

$copriSedile = new Product('Accessori per Auto', 'coprisedile_cane.jpg', 'Copri Sedile per Auto', '64,99€', new Category('cane'));

$maglioneNatale = new Product('Accessori per Cane', 'maglione_cane.jpg', 'Maglione per Cani di Natale', '7,99€', new Category('cane'));

$fontanella = new Product('Accessori per Gatti', 'fontanella_gatto.jpeg', 'Fontanella per Gatti', '23,99€', new Category('gatto'));

$tagliaUnghie = new Product('Accessori per Gatti', 'tagliaunghie.jpeg', 'Tagliaunghie per Gatto professionale', '6.99€', new Category('gatto'));

/*var_dump($copriSedile);
var_dump($maglioneNatale);
var_dump($fontanella);
var_dump($tagliaUnghie);*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Store</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header id="site_header">
        <div class="shop_title text-center mt-5">
            <h1>Matteo Gatto Shop</h1>
            <p>Tutto ciò che ti serve per il tuo amico a 4 zampe!</p>
        </div>
    </header>
    <!-- /#site_header -->

    <main id="site_main">

        <div class="container">
            <div class="products text-center mt-5">
                <div class="products_title">
                    <h2>I nostri prodotti:</h2>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img src=" ./img/<?= $copriSedile->image ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $copriSedile->name ?></h5>
                                <p class="card-text"><?= $copriSedile->type ?></p>
                                <p class="card-text"><?= $copriSedile->price ?></p>
                                <p class="card-text"><?= $copriSedile->type_article->type_article ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src=" ./img/<?= $maglioneNatale->image ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $maglioneNatale->name ?></h5>
                                <p class="card-text"><?= $maglioneNatale->type ?></p>
                                <p class="card-text"><?= $maglioneNatale->price ?></p>
                                <p class="card-text"><?= $maglioneNatale->type_article->type_article ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src=" ./img/<?= $fontanella->image ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $fontanella->name ?></h5>
                                <p class="card-text"><?= $fontanella->type ?></p>
                                <p class="card-text"><?= $fontanella->price ?></p>
                                <p class="card-text"><?= $fontanella->type_article->type_article ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src=" ./img/<?= $tagliaUnghie->image ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $tagliaUnghie->name ?></h5>
                                <p class="card-text"><?= $tagliaUnghie->type ?></p>
                                <p class="card-text"><?= $tagliaUnghie->price ?></p>
                                <p class="card-text"><?= $tagliaUnghie->type_article->type_article ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>
    <!-- /#site_main -->

    <footer id="site_footer">

    </footer>
    <!-- /#site_footer -->
</body>

</html>