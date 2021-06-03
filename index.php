<!-- Get items -->

<?php
require_once __DIR__ . '/data/main.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecno-commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body id="main">

    <div class="welcome">
        <h1>Tecno-commerce</h1>
        <h2><?php echo $item1->getPremium($loginID, $users_premium); ?></h2>
        <h3 id="userWelcome"></h3>
    </div>

    <div class="container content">


        <?php foreach ($items as $item) { ?>

            <div class="card">
                <div class="box-img">
                    <img src="<?php echo $item->img ?>" alt="">
                </div>
                <div class="box-text">
                    <h2> <?php echo $item->name ?> </h2>
                    <p> <?php echo $item->getText() ?>... </p>
                    <h2>Prezzo <?php echo $item->price ?>€</h2>
                    <h2> <?php echo $item->getPrice($loginID, $users_premium) ?> </h2>
                    <i class="fas fa-cart-plus"></i>
                </div>
            </div>

        <?php } ?>

    </div>



    <!-- script -->
    <script src="./js/main.js"></script>
</body>

</html>