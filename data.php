<?php
require_once('class.php');

$ton_katu = new Menu('とんかつ弁当','ton_katu.jpeg',500,'ton_katu');
$chikin_nanban = new Menu('チキン南蛮弁当','chikin_nanban.jpg',500,'chikin_nanban');
$sake_sio = new Menu('鮭の塩焼き弁当','sake_sio.jpg',500,'sake_sio');

$purukogi = new Menu('プルコギ弁当','purukogi.jpg',500,'purukogi');
$yurinti = new Menu('油淋鶏弁当','yurinti.jpeg',500,'yurinti');
$siromi_furai = new Menu('白身フライタルタルソース弁当','siromi_furai.jpg',500,'siromi_furai');

$hamburger = new Menu('ハンバーグ弁当','hamburger.jpg',500,'hamburger');
$tori_teriyaki = new Menu('鶏の照焼き弁当','tori_teriyaki.jpg',500,'tori_teriyaki');
$saba_nanban = new Menu('サバの南蛮漬け弁当','saba_nanban.jpeg',500,'saba_nanban');

$tikin_katu = new Menu('チキンカツ弁当','tikin_katu.jpg',500,'tikin_katu');
$buta_kimuti = new Menu('豚キムチ弁当','buta_kimuti.jpg',500,'buta_kimuti');
$ebi_furai = new Menu('エビフライとコロッケ弁当','ebi_furai.jpg',500,'ebi_furai');

$karage = new Menu('唐揚げ弁当','karage.jpg',500,'karage');
$buta_shouga = new Menu('豚の生姜焼き弁当','buta_shouga.jpg',500,'buta_shouga');
$saba_miso = new Menu('サバの味噌煮弁当','saba_miso.jpg',500,'saba_miso');


$monday = [$ton_katu,$chikin_nanban,$sake_sio];
$tuesday = [$purukogi,$yurinti,$siromi_furai];
$wednesday = [$hamburger,$tori_teriyaki,$saba_nanban];
$thursday = [$tikin_katu,$buta_kimuti,$ebi_furai];
$friday = [$karage,$buta_shouga,$saba_miso];

$menus = [$monday,$tuesday,$wednesday,$thursday,$friday];


?>