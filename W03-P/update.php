<?php
  $link = mysqli_connect('localhost:3307','root','rootroot','dbp');
  $query = "SELECT * FROM musical";
  $result = mysqli_query($link, $query);
  $list = '';
  while ($row = mysqli_fetch_array($result)) {
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }

  $article = array (
    'title' => 'Welcome',
    'description' => 'Database is ...'
  );

  if (isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
    $query = "SELECT * FROM musical WHERE id={$filtered_id}";
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
  <title> DATABASE </title>
</head>
<body>
  <h1><a href="index.php"> 뮤지컬 설명 수정 </a></h1>
  <style>
    h1 {background-color: #FFE4E1; width: 250px;}
  </style>
  <ol>
    <?= $list ?>
  </ol>
  <form action = "process_update.php" method="post">
    <input type="hidden" name="id" value="<?=$filtered_id?>">
    <p><input type="text" name="title" placeholder="title" value="<?=$article['title']?>"></p>
    <p><textarea name="description" placeholder="description"><?=$article['description']?></textarea></p>
    <p><input type="submit"></p>
  </form>
</body>
</html>
