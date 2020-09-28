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
  $update_link = '';
  $delete_link = '';
  $casting='';

  if (isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
    $query = "SELECT * FROM musical LEFT JOIN casting
    ON musical.casting_id = casting.id
    WHERE musical.id={$filtered_id}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);

    $article['title'] = htmlspecialchars($row['title']);
    $article['description'] = htmlspecialchars($row['description']);
    $article['name'] = htmlspecialchars($row['name']);

    $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
    $delete_link = '
      <form action="process_delete.php" method="POST">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        <input type="submit" value="delete">
      </form>
      ';

      $casting="<p>by {$article['name']}</p>";
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
  <a href="casting.php">Casting</a>
  <ol>
    <?= $list ?>
  </ol>
  <a href="create.php">알려주세요</a>
  <?=$update_link?>
  <?=$delete_link?>
  <h2> <?= $article['title'] ?> </h2>
  <?= $article['description'] ?>
  <?= $casting ?>
</body>
</html>
