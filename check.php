<?php 
session_start();
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
    <link rel="stylesheet" href="css/single.css">
    <link rel="stylesheet" href="css/check.css">
</head>

<body>
    <header>
        <h1>高津高校<br>シンショク食堂</h1>
    </header>

    <main>
        <section class="content">
         
            <div class="bar"></div>
            <h2 class="check-text">予約が確定しました</h2>
        <div class="box">
            <div class="left">
                <h4 class="name">予約商品</h4>
                <h4><?php echo $_POST['order']; ?></h4>
            </div>

            <div class="right">
                <h4 class="name">お名前</h4>
                <h4><?php echo $_SESSION['name']; ?></h4>
            </div>
        </div>
        <h4>予約時間           <?php echo date('m月d日 H時i分s秒',$timestamp); ?></h4>

        <a class="back" href="menus.php">メニュー表に戻る</a>

        </section>
    </main>



</body>

</html>