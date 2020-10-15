<?php
  $link = mysqli_connect('localhost:3307','root','rootroot','dbp');

  $query = "SELECT * FROM casting";
  $result = mysqli_query($link, $query);
  $casting_info = '';

  while ($row = mysqli_fetch_array($result)) {
    $filtered = array(
      'id' => htmlspecialchars($row['id']),
      'name' => htmlspecialchars($row['name']),
      'profile' => htmlspecialchars($row['profile'])
    );
      $casting_info .='<tr>';
      $casting_info .= '<td>'.$filtered['id'].'</td>';
      $casting_info .= '<td>'.$filtered['name'].'</td>';
      $casting_info .= '<td>'.$filtered['profile'].'</td>';
      $casting_info .= '<td><a href="casting.php?id='.$filtered['id'].'">update</a></td>';
      $casting_info .= '
      <td>
        <form action = "process_delete_casting.php" method="post">
          <input type="hidden" name="id" value="'.$filtered['id'].'">
          <input type="submit" value="delete">
        </form>
      </td>';
      $casting_info .='<tr>';
  };

  $escaped = array (
    'name' => '',
    'profile' => ''
  );

  $form_action = 'process_create_casting.php';
  $label_submit = 'Create casting';
  $form_id='';

  if(isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
    settype($filtered_id, 'integer');
    $query = "SELECT * FROM casting WHERE id = {$filtered_id}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $escaped['name'] = htmlspecialchars($row['name']);
    $escaped['profile'] = htmlspecialchars($row['profile']);

    $form_action = 'process_update_casting.php';
    $label_submit = 'Update casting';
    $form_id = '<input type="hidden" name="id" value="'.$_GET['id'].'">';
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Casting</title>
</head>
<body>
  <h1><a href="index.php">Casting</a></h1>
  <p><a href="index.php">Musical</a></p>

  <table border="1">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>profile</th>
      <th>update</th>
      <th>delete</th>
    </tr>
      <?= $casting_info ?>
  </table>
  <br>
  <form action="<?=$form_action?>" method="post">
    <?=$form_id?>
    <label for="fname">name:</label><br>
    <input type="text" id="name" name="name" placeholder="name" value="<?=$escaped['name']?>"><br>
    <label for="lname">profile:</label><br>
    <input type="text" id="profile" name="profile" placeholder="profile" value="<?=$escaped['profile']?>"><br><br>
    <input type="submit" value="<?=$label_submit?>">
</body>
</html>
