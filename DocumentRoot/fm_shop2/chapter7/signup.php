<?php require '../header.php'; ?>
<?php require 'menu.php'; ?>

<?php

$user = "猫田 重蔵";
$password = "CatField10";

try{

$dbh = new PDO("mysql:host=localhost; dbname=fm_shop; charset=utf8", "fujishima_mizuho", "Asdf3333-");

$stmt = $dbh->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");

$stmt->execute(array(':email' => $_POST['email'],':password' => password_hash($_POST['pass'], PASSWORD_DEFAULT)));

}catch(Exception $e){
    echo "データベースの接続に失敗しました：";
    echo $e->getMessage();
    die();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>会員登録</title>
</head>
<body>
    <h1>会員登録</h1>
    <form action="" method="post">
        <p>
            <label>メールアドレス：</label>
            <input type="text" name="email">
        </p>

        <p>
            <label>パスワード：</label>
            <input type="password" name="pass">
        </p>

        <input type="submit" name="submit" value="会員登録する">
    </form>
</body>
</html>
