<?php
$pdo=new PDO('mysql:host=localhost;dbname=fm_shop;charset=utf8', 
	'fujishima_mizuho', 'Asdf3333-');
  try{
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
    }
  ?>




