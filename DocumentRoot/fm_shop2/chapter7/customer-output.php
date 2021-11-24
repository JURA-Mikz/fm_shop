<!-- テーブルにinsertするのは$pswdの方 -->
<?php session_start(); ?>
<?php 
	$pdo=new PDO('mysql:host=localhost;dbname=fm_shop;charset=utf8', 
  'fujishima_mizuho', 'Asdf3333-')
  ?>
<?php
if (isset($_SESSION['customer'])) {
  $id=$_SESSION['customer']['id'];
  $sql=$pdo->prepare('select * from customer where id!=? and login=?');
  $sql->execute([$id, $_REQUEST['login']]);
} else {
  $sql=$pdo->prepare('select * from customer where login=?');
  $sql->execute([$_REQUEST['login']]);
}

if ( !empty($sql->fetchAll())) {

  echo 'ログイン名がすでに使用されていますので変更してください。';
  
}elseif ( $_POST['password'] != $_POST['password_c'] ){

  // パスワード確認
      echo 'パスワードが一致しません｡';
      
}else{
 
  // パスワードをハッシュ化する
  $pswd = password_hash($_REQUEST['password'], PASSWORD_DEFAULT); 

    if (isset($_SESSION['customer'])) {
      $sql=$pdo->prepare('update customer set name=?, address=?, login=?, password=? where id=?');
      $sql->execute([
        $_REQUEST['name'], $_REQUEST['address'],
        $_REQUEST['login'], password_hash($_REQUEST['password'], PASSWORD_DEFAULT)
        , $id
        ]); 

      $_SESSION['customer']=[
        'id'=>$id, 
        'name'=>$_REQUEST['name'],
        'address'=>$_REQUEST['address'], 
        'email'=>$_REQUEST['email'], 
        'login'=>$_REQUEST['login'],
        'password'=>$pswd //$_REQUEST['password']を変更
      ];
      echo '<html><header>
      <meta http-equiv="refresh" content="3;URL=/DocumentRoot/book_sample/chapter7/product.php">
      </header>
      <p>お客様情報を更新しました。</p>';

    } else {
      $sql=$pdo->prepare('insert into customer values( null
          ,?,?,?,?,?)');
      $sql->execute( [
          $_REQUEST['name']
        , $_REQUEST['address']
        , $_REQUEST['email']
        , $_REQUEST['login']
        , $pswd]);

        //セッションに代入してログイン済みにする
        $_SESSION['customer']['name']=$_REQUEST['name'];
        $_SESSION['customer']['address']=$_REQUEST['address'];
        $_SESSION['customer']['login']=$_REQUEST['login'];
        
        echo '<html><header>
        <meta http-equiv="refresh" content="3;URL=/DocumentRoot/book_sample/chapter7/product.php">
        </header>
        <p>お客様情報を登録しました。</p>';

    }
  }
?> 

<?php require '../footer.php'; ?>