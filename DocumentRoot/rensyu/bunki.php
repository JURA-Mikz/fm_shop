<?php
$age = 0;  // 他の数字も試すこと

if( !empty($age) && is_numeric($age) && $age>=12)
	echo "<p>乗れます";
else
	echo "<p>乗れません";