<?php
$link = mysqli_connect('localhost', 'admin', 'admin', 'employees');
$filtered = array(
    'emp_no' => mysqli_real_escape_string($link, $_POST['emp_no']),
    'birth_date' => mysqli_real_escape_string($link, $_POST['birth_date']),
    'first_name' => mysqli_real_escape_string($link, $_POST['first_name']),
    'last_name' => mysqli_real_escape_string($link, $_POST['last_name']),
    'gender' => mysqli_real_escape_string($link, $_POST['gender']),
    'hire_date' => mysqli_real_escape_string($link, $_POST['hire_date'])
);
$query = "
        INSERT INTO employees (
            emp_no, birth_date, first_name, last_name, gender, hire_date
        ) VALUES (
            '{$filtered['emp_no']}',
            '{$filtered['birth_date']}',
            '{$filtered['first_name']}',
            '{$filtered['last_name']}',
            '{$filtered['gender']}',
            '{$filtered['hire_date']}'        
        )
    ";
    // print_r($query);

$result = mysqli_query($link, $query);
if ($result == false) {
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.' ;
    error_log(mysqli_error($link));
} else {
    header('Location:index.php');
}

?>