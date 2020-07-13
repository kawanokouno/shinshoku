<?php 
session_start();

require_once('../data.php');

if (!$_SESSION['name']) {
    header('Location: ../login.php');}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/single.css">
</head>

<body>
    <header>
        <h1>高津高校<br>シンショク食堂</h1>
    </header>

    <main>
        <section class="content">
        <form action="../check.php" method="post"  >

            <div class="bar"></div>
            <input class="hide" name="order" type="text" value="<?php echo $karage->getName(); ?>" style="visibility: hidden;">

            <h4><?php echo $karage->getName() ;?></h4>

            <div class="menus">
                <a href="" class="menu">
                    <img src="../img/<?php echo $karage->getImage(); ?>" alt="">
                </a>
                <p>肉汁がたっぷりの重厚なハンバーグ弁当です。満足してもらえる一品となっています。</p>
                <div class="move">
                <input class  ="regist" type="submit" value="注文を確定する" style="margin-left: 11px;">
    
                    <a class="back" href="../menus.php">メニュー表に戻る</a>
                </div>
                </form>

        </section>
    </main>



</body>

</html>