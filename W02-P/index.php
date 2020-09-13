<?php
  $link = mysqli_connect('localhost:3307','root','rootroot','dbp');
  $query = "SELECT * FROM musical";
  $result = mysqli_query($link, $query);
  $list = '';
  while ($row = mysqli_fetch_array($result)) {
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }

  $article = array (
    'title' => '좋아하는 뮤지컬',
    'description' => ''
  );

  if (isset($_GET['id'])) {
    $query = "SELECT * FROM musical WHERE id={$_GET['id']}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article = array(
      'title' => $row['title'],
      'description' => $row['description']
    );
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Musical </title>
</head>
<body>
  <h1><a href="index.php"> 좋아하는 뮤지컬을 알려주세요! </a></h1>
  <style>
    h1 {background-color: #FFE4E1; width: 460px;}
  </style>
  <ol>
    <?= $list ?>
  </ol>
  <a href="create.php">알려주세요</a>
  <h2> <?= $article['title'] ?> </h2>
  <?= $article['description'] ?>
</body>
</html>
