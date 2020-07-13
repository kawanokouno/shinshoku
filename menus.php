<?php
session_start();
require_once('data.php');
require_once('time.php');

if (!$_SESSION['name']) {
    header('Location: login.php');
}






?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <h1>高津高校<br>シンショク食堂</h1>

    </header>


    <main>
        <section class="content">
            <h2>メニュー表</h2>
            <h3>ようこそ <?php echo $_SESSION['name']; ?> さん</h3>
            <h3>ALL 500円!</h3>
            <h3><?php echo $day; ?>曜日のメニューです</h3>

            <div class="menus">
                <?php foreach ($menus[$d - 1] as $menu) : ?>
                    <a href="single-page/<?php echo $menu->getPage(); ?>.php" class="menu">
                        <img src="img/<?php echo $menu->getImage(); ?>" alt="">
                        <h4><?php echo $menu->getName(); ?></h4>
                    </a>
                <?php endforeach; ?>




        </section>
    </main>



</body>

</html>