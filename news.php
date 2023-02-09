<?php
include 'conn.php';
$readSql = "SELECT * FROM news";
$result = $connection -> query($readSql);
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
        <div class="container">
            <div class="new">
                <?php
                    if ($result -> num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <div class="noutate">
                                    <img src="<?= $row['image'] ?>" alt="">
                                    <h1><?= $row['title'] ?></h1>
                                    <p><?= $row['description'] ?></p>
                                    <a href="./new.php?id=<?= $row['id'] ?>">Know more <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            <?php
                        }
                    }
                ?>
            </div>
        
    </main>

    <?php include 'footer.php' ?>

    <script type="text/javascript" src="script.js"></script>
    <script src="https://kit.fontawesome.com/43f74a5d80.js" crossorigin="anonymous"></script>
</body>
</html>