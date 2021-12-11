<link rel="stylesheet" href="style.css">
<div class="wrap">   
  <img class="kai" src="img/kai.png" alt="開">
  <img class="torii" src="img/torii.png" alt="鳥居">
  <img class="un" src="img/un.png" alt="運">

<?php


$num = rand(1,100);
if( $num <= 5){
  echo "<img class='fuda' src='img/daikyo.png' alt='' />";
}elseif( $num > 5 && $num <= 15){
  echo "<img class='fuda' src='img/kyo.png' alt='' />";
}elseif( $num > 15 && $num <= 30){
  echo "<img class='fuda' src='img/sue.png' alt='' />";
}elseif( $num > 30 && $num <= 50){
  echo "<img class='fuda' src='img/shou.png' alt='' />";
}elseif( $num > 50 && $num <= 75){
  echo "<img class='fuda' src='img/chu.png' alt='' />";
}elseif( $num > 75 && $num <= 95){
  echo "<img class='fuda' src='img/kichi.png' alt='' />";
}elseif( $num > 95 && $num <= 100){
  echo "<img class='fuda' src='img/dai.png' alt='' />";
}
?>

</div>