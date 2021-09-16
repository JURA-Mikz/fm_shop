<?php
session_start();
$_SESSION['token']=乱数();
?>
<form  >
<input type="hidden" name="token"
Value="<?=$_SESSION['token']?>" >

