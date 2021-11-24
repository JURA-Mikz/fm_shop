<!-- 7-3 p270 -->

<?php session_start(); ?> 
<?php require '../header.php'; ?>
<?php 
  $name=$address=$login=$password=$mail='';
  if (isset($_SESSION['customer'])) {
    $name=$_SESSION['customer']['name'];
    $address=$_SESSION['customer']['address'];
    $email=$_SESSION['customer']['email'];
    $login=$_SESSION['customer']['login'];
  } 
?> 
<form class="customer" action="customer-output.php" method="post">
  <table>
    <tr>
      <td>お名前<em>＊</em></td>
      <td><input type="text" name="name" value="<?=$name?>"  required></td>
    </tr>
    <tr>
      <td>ご住所<em>＊</em></td>
      <td><input type="text" name="address" value="<?=$address?>"  required></td>
    </tr>
    <tr>
      <td>メール<em>＊</em></td>
      <td><input type="email" name="email" value="<?=isset($email)?$email:''?>" required></td>
    </tr>
    <tr>
      <td>ログイン名<em>＊</em></td>
      <td><input type="text" name="login" value="<?=$login?>" required></td>
    </tr>
    <tr>
      <td>パスワード<em>＊</em></td>
      <td><input type="password" name="password" value="" required></td>
    </tr>
    <tr>
      <td>パスワード確認<em>＊</em></td>
      <td><input type="password" name="password_c" value="" required></td>
    </tr>
    
  </table>
  <input type="submit" value="確定">
</form>
<?php require '../footer.php'; ?>