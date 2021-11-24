<?php 
 session_start();
if (isset($_SESSION['customer'])) {
  unset($_SESSION['customer']) ;
  echo '<html><header>
  <meta http-equiv="refresh" content="3;URL=/DocumentRoot/chapter7/product.php">
  </header>
  <p>ログアウトしました｡</p>
  ';

} else {
  echo '<html><header> 
  <meta http-equiv="refresh" content="3;URL=/DocumentRoot/chapter7/product.php">
  </header>
  <p>すでにログアウトしています。</p>';
}
?> 

<?php require '../footer.php'; ?>
