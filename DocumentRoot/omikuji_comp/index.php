<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8" />
<link rel="stylesheet" href="style.css?v=1" />
<!-- or from surge.sh -->
<link rel="stylesheet" type="text/css"
	href="http://csshake.surge.sh/csshake.min.css">

<a href="uranai.php" onclick="delay()">
	<div class="box shake-slow"></div>
</a>

<a>
	<img src="img/box2.png" class="box shake-slow" ></div>
</a>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script>

$('img.box').parent().mousedown(function (event) {
	event.preventDefault();
	$('img.box').attr('src','img/box1.png');
	setTimeout( function() {
     location.href ='uranai.php';
	}, 1000 );
});


function delay(){
    var a = new Date().getTime();
    var b = new Date().getTime();
	    while ( b-a < 2000){
	      b = new Date().getTime();
	    }
  }
</script>
