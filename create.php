<?php
include 'conn.php';
if(count($_POST)>0){
    $creteSql = "INSERT INTO news (title, description, image) VALUES ('{$_POST['title']}', '{$_POST['description']}','{$_POST['image']}')";

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
    <header>
        <div class="logo">MoldovaFilm</div>
        <button id="hamburger"><i class="fa-solid fa-bars"></i></button>
        <nav>
            <a href="#">Acasă</a>
            <a href="#">Filme</a>
            <a href="#">Cinematografe</a>
            <a href="news.php" id="noutati">Noutăți</a>
            <div class="noutati-mod">
                <ul>
                <li><a href="create.php">Create New</a></li>
                <li><a href="update.php">Update New</a></li>
                <li><a href="delete.php">Delete New</a></li>
            </ul>
            </div> 
        </nav>
        <div class="header-btns">
            <div class="btn-login">
                <button>
                    <div id="login-icon"></div>
                    <p>Log-in</p>
                </button>
            </div>        
            <div class="language">
                <button class="pressed">RO</button>
                <button class="pressed">RU</button>
                <button class="pressed">EN</button>
            </div>        
            <div class="sites">
                <button id="facebook"></button>
                <button id="telegram"></button>
                <button id="instagram"></button>
            </div>        
        </div>
    </header>
    <main>
        <div class="container">
           <form action="./create.php" method="POST">
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="description" id="" cols="30" rows="10" required></textarea>
            <input type="text" name="image" placeholder="image" required>
            <button type="submit">Create</button>
           </form>
        </div>
    </main>

    <footer>
        <div class="log">
             <div class="logo">MoldovaFilm</div>
            <p>© 2023 Toate drepturile înregistrate.</p>
            <div class="sites">
                        <button id="facebook"></button>
                        <button id="telegram"></button>
                        <button id="instagram"></button>
            </div>
        </div>
        <div class="links">
                <a href="#">Acasă</a>
                <a href="#">Filme</a>
                <a href="#">Cinematografe</a>
                <a href="news.php" id="noutati">Noutăți</a> 
        </div> 
        <div class="card">
            <p>Acceptăm</p>
            <div class="cards">
                <button id="visa"></button>
                <button id="master"></button>
            </div>
        </div>        
    </footer>

    <script type="text/javascript" src="script.js"></script>
    <script src="https://kit.fontawesome.com/43f74a5d80.js" crossorigin="anonymous"></script>
</body>
</html>