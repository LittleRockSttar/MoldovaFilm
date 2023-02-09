<?php

include 'conn.php';

// if(!isset($_SESSION['id'])) {
//     header("Location: idex.php");
// }

// $id = $_SESSION['id'];
$sql = "SELECT * FROM cart INNER JOIN film ON cart.film_id = film.id 
-- WHERE users_id = {id}
";

$delete = "DELETE FROM cart WHERE id = '{}'";

$result = $connection -> query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="news.css">
    <style>
        <?php include "news.css"?>
    </style>
</head>
<body>
    <?php include 'header.php' ?>

    <main>
            <div class="cart">
                
                <?php while ($row = mysqli_fetch_assoc($result)) {?>
                    <div class="cart_item">
                        <img src="<?= $row['image']?>" alt="">
                        <h2><?= $row['name']?></h2>
                        <p><?= $row['format']?></p>
                        <p><?= $row['language']?></p>
                    </div>
                <?php }?>
            </div>
    </main>

    <?php include 'footer.php' ?>


    <script type="text/javascript" src="script.js"></script>
    <script src="https://kit.fontawesome.com/43f74a5d80.js" crossorigin="anonymous"></script>
</body>
</html>