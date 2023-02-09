<?php
include 'conn.php';
if(count($_POST)>0){
    $creteSql = "DELETE FROM news WHERE id = '{$_POST['id']}'";

    $connection->query($creteSql);
    header("Location: ./news.php");
}
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
           <form action="./delete.php" method="POST">
            <input type="text" name="id" placeholder="id" required>
            <button type="submit">Delete</button>
           </form>
        </div>
    </main>

    <?php include 'footer.php' ?>

    <script type="text/javascript" src="script.js"></script>
    <script src="https://kit.fontawesome.com/43f74a5d80.js" crossorigin="anonymous"></script>
</body>
</html>