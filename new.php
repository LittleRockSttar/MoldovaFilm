<?php
$id = $_GET['id'];
include 'conn.php';
$readSql = "SELECT * FROM news WHERE id = ".$id;
$result = $connection->query($readSql);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noutăți</title>
    <link rel="stylesheet" href="news.css">
    <style>
        <?php include "news.css" ?>
    </style>
</head>
<body>
    <?php include 'header.php' ?>
    <main>
            <div class="new-about">
                <div class="new-image">
                    <img src="<?= $row['image']?>" alt="">
                </div>
                <div class="new-data">
                    <h1><?= $row['title']?></h1>
                    <p><?= $row['description']?></p>
                </div>
    </main>

    <?php include 'footer.php' ?>

    <script type="text/javascript" src="script.js"></script>
    <script src="https://kit.fontawesome.com/43f74a5d80.js" crossorigin="anonymous"></script>
</body>
</html>