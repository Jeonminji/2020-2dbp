<?php
    $link=mysqli_connect('localhost','admin','admin','employees');

    if(mysqli_connect_errno()) {
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
        echo "<br>";
        echo mysqli_connect_error();
        exit(); //연결을 종료
    } 

    settype($_GET['number'], 'integer');
    $filtered_number = mysqli_real_escape_string($link, $_GET['number']);
    
    $query = "
        SELECT first_name, last_name, salary, from_date, to_date
        FROM salaries
        LEFT JOIN employees
        ON salaries.emp_no = employees.emp_no        
        ORDER BY salary DESC
        LIMIT ".$filtered_number."
    ";


    $result = mysqli_query($link, $query);
    
    $article='';
    while($row = mysqli_fetch_array($result)) {
        $article .= '<tr><td>>';
        $article .= $row['first_name'];
        $article .= '</td><td>';
        $article .= $row['last_name'];
        $article .= '</td><td>';
        $article .= $row['salary'];
        $article .= '</td><td>';
        $article .= $row['from_date'];
        $article .= '</td><td>';
        $article .= $row['to_date'];
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
    <title> 연봉 정보 </title>
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
        <h2><a href="index.php">직원 관리 시스템</a> | 연봉 정보</h2>
        <table>
            <tr>
                <th>first_name</th>
                <th>last_name</th>
                <th>salary</th>
                <th>from_date</th>
                <th>to_date</th>
            </tr>
            <?=$article ?>
        </table>
</body>
</html>