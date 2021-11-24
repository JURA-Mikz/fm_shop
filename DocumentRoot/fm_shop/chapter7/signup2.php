<?php
 
// ログの表示
ini_set('log_errors','On');
ini_set('error_log','php.log');
 
 
//（2） postされていれば処理を開始する
if(!empty($_POST)){
 
  // （3）postした「名前」と「パスワード」を変数に入れる
  $user_name = !empty($_POST['猫田 重蔵']) ? $_POST['CatField10']:'';
  $user_pass = !empty($_POST['Asdf3333-']) ? $_POST['Asdf3333-']:'';
 
  // （4）例外処理でDB接続準備
  // *通常はここでバリデーションチェック*
  try{
 
  $dsn = 'mysql:dbname=fm_shop,;host=localhost;charset=utf8';
  $user = 'fujishima_mizuho';
  $password = 'Asdf3333-';
  $options = array(
    // SQL実行失敗時には例外をスローしてくれる
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // カラム名をキーとする連想配列で取得する．これが一番ポピュラーな設定
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // バッファードクエリを使う(一度に結果セットをすべて取得し、サーバー負荷を軽減)
    // SELECTで得た結果に対してもrowCountメソッドを使えるようにする
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,);
 
    // （5）PDOオブジェクトでDBに接続
    $dbh = new PDO($dsn,$user,$password,$options);
 
    // （6）SQL文：usersテーブルにuser_nameとpasswordを挿入する
    // 変数値はそのままセットせず、プレースホルダを使用する
    $sql = 'INSERT INTO users(user_name ,password,create_date) VALUES(:user_name,:password,:create_date)';
 
    // （7）prepareメソッドを使ってSQL実行準備
    $stmt = $dbh->prepare($sql);
 
    // （8）executeメソッドでクエリの実行：ハッシュ化したパスワードをDBに登録
    $stmt->execute(array(
      ':user_name' => $user_name,
      ':password' =>  password_hash($user_pass,PASSWORD_DEFAULT),
      ':create_date' => date('Y-m-d H:i:s')));
 
     }catch(Exception $e){
       error_log('エラー発生：' . $e->getMessage());
  }
 
}
 
 
?>
 
 
 
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>ハッシュ化</title>
</head>
<body>
 
<section class="contents">
 
<form action="" method="post" class="form-container">
<!-- （1）formタグからpost送信 -->
<label for="" class="label-username">お名前：</label>
<input type="text" name="user_name" class="input input-username" placeholder="お名前" >
 
<label for="" class="label-password">パスワード：</label>
<input type="password" name="user_pass" class="input input-password" placeholder="パスワード">
 
<input type="submit" class="btn" value="送信する">
 
</form>
 
 
</section>
 
</body>
</html>