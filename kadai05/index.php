<?php
$hands=['グー','チョキ','パー'];
$picts=['gu','choki','par'];
$results=['あいこ','アナタの負けです...また来週！','アナタの勝ちです！'];
if(isset($_POST['hand'])){
  $userHand=(int)$_POST['hand'];
  $pcHand=rand(0,count($hands)-1);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>サザエ&nbsp;VS&nbsp;サザエ</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<form method="post">
  <div class="choose">
    <?php for($i=0;$i<count($hands);$i++):?>
    <?php $checked=isset($userHand) && $userHand===$i ? 'checked':'';?>
    <input type="radio" name="hand" value="<?=$i?>" <?=$checked?>><?=$hands[$i]?><br>
    <?php endfor;?>
  </div>
  <button type="submit">じゃんけんぽん</button>
</form>
<?php if(isset($_POST['hand'])):?>
  <div class="sazae_img">
    <img src="img/<?=$picts[$userHand]?>.jpeg">
    <p class="vs">VS</p>
    <img src="img/<?=$picts[$pcHand]?>.jpeg">
  </div>
  <p><?=$results[($userHand + 3 -$pcHand) % 3]?></p>
<?php endif;?>
</body>

</html>