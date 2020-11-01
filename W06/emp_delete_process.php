<?php
$link = mysqli_connect('localhost', 'admin', 'admin', 'employees');
$filtered_id = mysqli_real_escape_string($link, $_POST['emp_no']);
$query = "
        DELETE FROM employees        
        WHERE
            emp_no = '{$filtered_id}' 
    ";
    // print_r($query);

$result = mysqli_query($link, $query);
if ($result == false) {
    echo '삭제하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.' ;
    error_log(mysqli_error($link));
} else {
    header('Location:index.php');
}

?>