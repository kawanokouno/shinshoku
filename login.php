<?php 
require_once('time.php');

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
            <div class="bar"></div>
            <?php if($d = 0): ?>
                
  <h3>営業日は月曜~金曜です</h3>




            <?php else:?>
    <form action="name.php" method="post">
        <h4>お名前を入力して下さい</h4>
        <div class="inputs">
            <input type="text" placeholder="名前" name="name">
            <input type="submit">
        </div>
    </form>

<?php endif; ?>


        </section>
    </main>



</body>

</html>