<?php
    $link = mysqli_connect("localhost", "admin", "admin", "sakila");

    if(mysqli_connect_errno()) {
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
        echo "<br>";
        echo mysqli_connect_error();
        exit();
    } 

    $filtered = array(
        'group' => mysqli_real_escape_string($link, $_POST['group'])
    );

    if ($filtered['group']=="rating") {
        $query = "SELECT rating, count(*)
            FROM film_list
            GROUP BY {$filtered['group']}
        ";
    } else if ($filtered['group']=="category") {
        $query = "SELECT category, count(*)
            FROM film_list
            GROUP BY {$filtered['group']}
            ORDER BY category
        ";
    } else if ($filtered['group']=="special_features") {
        $query = "SELECT special_features, count(*)
            FROM film
            GROUP BY {$filtered['group']}
        ";
    }

    $movie_info = '';
    $result = mysqli_query($link, $query);

    if ($filtered['group']=="rating") {
        while($row = mysqli_fetch_array($result)){
            $movie_info .= '<tr>';
            $movie_info .= '<td class="tg-0mbg">'.$row['rating'].'</td>';
            $movie_info .= '<td class="tg-0mbg">'.$row['count(*)'].'</td>';
            $movie_info .= '</tr>';
        }
    } else if ($filtered['group']=="category") {
        while($row = mysqli_fetch_array($result)){
            $movie_info .= '<tr>';
            $movie_info .= '<td class="tg-0mbg">'.$row['category'].'</td>';
            $movie_info .= '<td class="tg-0mbg">'.$row['count(*)'].'</td>';
            $movie_info .= '</tr>';
        }
    } else if ($filtered['group']=="special_features") {
        while($row = mysqli_fetch_array($result)){
            $movie_info .= '<tr>';
            $movie_info .= '<td class="tg-0mbg">'.$row['special_features'].'</td>';
            $movie_info .= '<td class="tg-0mbg">'.$row['count(*)'].'</td>';
            $movie_info .= '</tr>';
        }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 영화 목록 시스템 </title>
</head>

<body>
    <h2><a href="index.php">영화 목록 시스템</a> | 보유하고 있는 영화 수 🎥</h2>
    <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-0mbg{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;text-align:center;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-ey97{font-family:"Arial Black", Gadget, sans-serif !important;;font-size:18px;font-weight:bold;text-align:center;vertical-align:top}
    </style>
    <table class="tg">
    <thead>
    <tr>
        <th class="tg-ey97">종류</th>
        <th class="tg-ey97">영화 수</th>
    </tr>
    <?=$movie_info?>
    </thead>
    </table>
</body>

</html>