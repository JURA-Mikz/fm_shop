<?php
session_start();
require '../header.php';
if( isset($_POST['token']&&
$_POST['token'] == $_SESSION['token'])){

}else{   //トークンが正しいときにやることを書く

}トークンが不正なときの処理