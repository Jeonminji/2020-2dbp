<?php
    $link = mysqli_connect("localhost", "admin", "admin", "sakila");

    if(mysqli_connect_errno()) {
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
        echo "<br>";
        echo mysqli_connect_error();
        exit();
    } 

    $filtered = array(
        'number' => mysqli_real_escape_string($link, $_POST['number']),
        'range' => mysqli_real_escape_string($link, $_POST['range'])
    );
    
    $query = "SELECT f.film_id, f.title, fl.actors, fl.category, fl.length, lg.name, f.release_year 
        FROM film f
        INNER JOIN film_list fl 
        ON f.title = fl.title 
        INNER JOIN language lg 
        ON f.language_id = lg.language_id 
        ORDER BY f.title {$filtered['range']} 
        LIMIT {$filtered['number']}
    ";
    
    $result = mysqli_query($link, $query);
    $movie_info = '';

    while($row = mysqli_fetch_array($result)){
        $movie_info .= '<tr>';
        $movie_info .= '<td class="tg-0mbg">'.$row['film_id'].'</td>';
        $movie_info .= '<td class="tg-0mbg">'.$row['title'].'</td>';
        $movie_info .= '<td>'.$row['actors'].'</td>';
        $movie_info .= '<td class="tg-0mbg">'.$row['category'].'</td>';
        $movie_info .= '<td class="tg-0mbg">'.$row['length'].'</td>';
        $movie_info .= '<td class="tg-0mbg">'.$row['name'].'</td>';
        $movie_info .= '<td class="tg-0mbg">'.$row['release_year'].'</td>';
        $movie_info .= '</tr>';
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 영화 목록 시스템 </title>
</head>

<body>
    <h2><a href="index.php">영화 목록 시스템</a> | 영화 전체 목록 🎥</h2>
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
        <th class="tg-ey97">번호</th>
        <th class="tg-ey97">영화 제목</th>
        <th class="tg-ey97">출연 배우</th>
        <th class="tg-ey97">장르</th>
        <th class="tg-ey97">러닝타임</th>
        <th class="tg-ey97">국가</th>
        <th class="tg-ey97">개봉년도</th>
    </tr>
    <?=$movie_info?>
    </thead>
    </table>
</body>

</html>