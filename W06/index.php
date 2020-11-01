<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 직원 관리 시스템 </title>
</head>
<body>
    <h1>직원 관리 시스템</h1>

    <form action="emp_select.php" method="POST">
    (1) 직원 정보 조회</a><br>
    <input type="int" name="number" placeholder="조회할 인원(숫자만 입력)">
    <select name="range">
        <option value="ASC">오름차순</option>
        <option value="DESC">내림차순</option>
    </select>
    <input type="submit" value="Search">
    </form>

    <a href="emp_insert.php">(2) 신규 직원 등록</a><br>
   
    <form action="emp_update.php" method="POST">
        (3) 직원 정보 수정:
        <input type="text" name="emp_no" placeholder="emp_no">
        <input type="submit" value="Search">
    </form>

    <form action="emp_delete.php" method="POST">
        (4) 직원 정보 삭제:
        <input type="text" name="emp_no" placeholder="emp_no">
        <input type="submit" value="Delete">
    </form>
</body>
</html>