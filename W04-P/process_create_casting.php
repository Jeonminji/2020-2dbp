<?php
  $link = mysqli_connect("localhost:3307","root","rootroot","dbp");
  $filtered = array(
    'name' => mysqli_real_escape_string($link, $_POST['name']),
    'profile' => mysqli_real_escape_string($link, $_POST['profile'])
  );
  $query = "
    INSERT INTO casting (
      name, profile
      ) VALUES (
        '{$filtered['name']}',
        '{$filtered['profile']}'
        )
  ";

  $result = mysqli_query($link, $query);
  if ($result == false) {
    echo '저장하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요.';
    error_log(mysqli_error($link));
  } else {
    header('Location: casting.php');
  }
 ?>
