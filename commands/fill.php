<?php

  $pdo = new PDO('mysql:dbname=tutophp;host=127.0.0.1','root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]);

  $pdo->exec('SET FOREIGN_KEY_CHECKS = 0');
  $pdo->exec('TRUNCATE TABLE post_category');
  $pdo->exec('TRUNCATE TABLE Post');
  $pdo->exec('TRUNCATE TABLE Category');
  $pdo->exec('TRUNCATE TABLE user');
  $pdo->exec('SET FOREIGN_KEY_CHECKS = 1');

  for($i = 0; $i < 50 ; $i++){
    $pdo->exec("INSERT INTO post SET name='Article $i', slug = 'article $i', created_at = '2023-08-11 14:0:0', content='Lorem ispm'");
  }
?>