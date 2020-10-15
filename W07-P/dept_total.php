<?php
    $link=mysqli_connect('localhost','admin','admin','employees');

    if(mysqli_connect_errno()) {
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
        echo "<br>";
        echo mysqli_connect_error();
        exit(); //연결을 종료
    } 
    
    $query = "
        SELECT de.dept_no, d.dept_name, count(*)
        FROM dept_emp de
        INNER JOIN departments d
        ON de.dept_no=d.dept_no
        GROUP BY de.dept_no
    ";


    $result = mysqli_query($link, $query);
    
    $article='';
    while($row = mysqli_fetch_array($result)) {
        $article .= '<tr><td>>';
        $article .= $row['dept_no'];
        $article .= '</td><td>';
        $article .= $row['dept_name'];
        $article .= '</td><td>';
        $article .= $row['count(*)'];
        $article .= '</td></tr>';
    }

    // 연결 끊어줌
    mysqli_free_result($result);
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 인원 수 </title>
    <style>
        body {
            font-family: Consolas, monospace;
            font-family: 12px;
        }
        table {
            width: 100%;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #dadada;
        }
    </style>
</head>
<body>
        <h2><a href="index.php">직원 관리 시스템</a> | 부서별 인원 수</h2>
        <table>
            <tr>
                <th>부서 번호</th>
                <th>부서명</th>
                <th>인원</th>
            </tr>
            <?=$article ?>
        </table>
</body>
</html>