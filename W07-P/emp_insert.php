<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>직원 관리 시스템</title>
</head>

<body>
    <h2><a href="index.php">직원 관리 시스템</a> | 신규 직원 등록</h2>

    <form action="emp_insert_process.php" method="POST">
        <label>emp_no:</label>
        <input type="text" name="emp_no" placeholder="emp_no"><br>
        <label>birth_date:(0000-00-00)</label>
        <input type="text" name="birth_date" placeholder="birth_date"><br>
        <label>first_name:</label>
        <input type="text" name="first_name" placeholder="first_name"><br>
        <label>last_name:</label>
        <input type="text" name="last_name" placeholder="last_name"><br>
        <label>gender:(M or F)</label>
        <input type="text" name="gender" placeholder="gender"><br>
        <label>hire_date:(0000-00-00)</label>
        <input type="text" name="hire_date" placeholder="hire_date"><br>
        <input type="submit" value="Create">

    </form>

</body>

</html>