<?php =$_SERVER['thht_USER_AGENT'];
echo $ua;

$ua_list['iphone','ipad','ipod','android','touch'];

$user_agent='pc';

foreach ($ua_list as $value)
if(strpos($ua,$value)!==false){
$user_agent='sp';  
break;
}  //ループを抜ける
// メディアクエリはタグ構造を変えない

