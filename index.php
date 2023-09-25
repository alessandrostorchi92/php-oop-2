<?php

require_once __DIR__ . '/classes/Categoria.php';
require_once __DIR__ . '/classes/Gatti.php';
require_once __DIR__ . '/classes/Cani.php';

require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Gioco.php';
require_once __DIR__ . '/classes/Cuccia.php';

$cane = new Cani(_icon: "/img/dog_icon.png");
$gatto = new Gatti(_icon: "/img/cat_icon.png");

// var_dump($gatto->getIcon());
// var_dump($cane->getIcon());


$productList = [

    $Gioco1 = new Gioco(
        _category: new Cani(_icon:'<i class="fa-solid fa-dog"></i>'),
        _title: "Trixie - Anatra Giocattolo in Lattice per Cani",
        _img: "https://m.media-amazon.com/images/I/51aouKHQMQS._AC_SL1500_.jpg",
        _price: "23,27€"
    ),

    $Gioco2 = new Gioco(
        _category: new Gatti(_icon:'<i class="fa-solid fa-cat"></i>'),
        _title: "Trixie - Torre giocattolo Catch the Balls",
        _img: "https://m.media-amazon.com/images/I/71qTYWb9fcL._AC_SL1500_.jpg",
        _price: "9,49€"
    ),

    $Cibo1 = new Cibo(
        _category: new Cani(_icon:'<i class="fa-solid fa-dog"></i>'),
        _title: "Natural Trainer Medium Cibo per Cani Adulti con Prosciutto crudo",
        _img: "https://m.media-amazon.com/images/I/71hu2fUPCEL._AC_SL1500_.jpg",
        _price: "42,74€"
    ),

    $Cibo2 = new Cibo(
        _category: new Gatti(_icon:'<i class="fa-solid fa-cat"></i>'),
        _title: "Trainer Natural Cat Sterilised Adult con Carni Bianche e Fibra di Pisello",
        _img: "https://m.media-amazon.com/images/I/81CbTUNTWgL._AC_UL640_QL65_.jpg",
        _price: "18,80€"
    ),

    $Cuccia1 = new Cuccia(
        _category: new Cani(_icon:'<i class="fa-solid fa-dog"></i>'),
        _title: "Cuccia per Cani",
        _img: "https://m.media-amazon.com/images/I/71HApM5ekbL._AC_SL1500_.jpg",
        _price: "22,99€"
    ),

    $Cuccia2 = new Cuccia(
        _category: new Gatti(_icon:'<i class="fa-solid fa-cat"></i>'),
        _title: "Cuccia per Gatto",
        _img: "https://m.media-amazon.com/images/I/81u60sTRjYL._AC_SL1500_.jpg",
        _price: "26,99€"
    ),

];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Creare uno shop online avente più classi collegate tramite " extends".>
    <title>PHP OOP 2</title>

    <!-- Framework Bootstrap css  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Font Awesome CDN  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Custom css  -->

    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <header>

        <div class="container text-center">
            <h1 class="display-1 mt-5 fw-semibold"> Dogs and Cats Products</h1>
        </div>

    </header>

    <main>
        <div class="container mt-5 pb-5">
            <div class="row row-cols-2 g-5">
                <?php foreach ($productList as $product) { ?>
                    <div class="col text-center">
                        <div class="card h-100 rounded-4">
                            <div class="card-body d-flex flex-column">
                            <strong><?php echo $product->getCategory()?></strong> 
                                <img src="<?php echo $product->getImg()?>" class="card-img-top rounded-4 mt-5" alt="...">
                                <h5 class="card-title mt-3"><?php echo $product->getTitle()?></h5>
                                <p class="card-text mt-auto"></strong> <?php echo $product->getPrice()?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </main>


</body>


</html>