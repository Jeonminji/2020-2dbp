<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 영화 목록 시스템 </title>
</head>

<style>
    .layout1 {background-color: #FFE4E1; width: 350px;}
</style>

<body>
    <div class="layout1">
        <h1> 🎥 영화 목록 시스템 🎞 </h1>
    </div>

    <form action="movie_select.php" method="POST">
        (1) 영화 전체 목록</a>
    <input type="int" name="number" placeholder="조회할 영화 수(숫자 입력)">
    <select name="range">
        <option value="ASC">오름차순</option>
        <option value="DESC">내림차순</option>
    </select>
    <input type="submit" value="Search">
    </form>

    <form action="rating_select.php" method="POST">
        (2) 등급별 영화 목록</a>
    <select name="group">
        <option value="G">G</option>
        <option value="PG">PG</option>
        <option value="PG-13">PG-13</option>
        <option value="R">R</option>
        <option value="NC-17">NC-17</option>
    </select>
    <input type="submit" value="Search">
    </form>

    <form action="category_select.php" method="POST">
        (3) 장르별 영화 목록</a>
    <select name="group">
        <option value="Action">Action</option>
        <option value="Animation">Animation</option>
        <option value="Children">Children</option>
        <option value="Classics">Classics</option>
        <option value="Comedy">Comedy</option>
        <option value="Documentary">Documentary</option>
        <option value="Drama">Drama</option>
        <option value="Family">Family</option>
        <option value="Foreign">Foreign</option>
        <option value="Games">Games</option>
        <option value="Horror">Horror</option>
        <option value="Music">Music</option>
        <option value="New">New</option>
        <option value="Sci-Fi">Sci-Fi</option>
        <option value="Sports">Sports</option>
        <option value="Travel">Travel</option>
    </select>
    <input type="submit" value="Search">
    </form>

    <form action="total_movie.php" method="POST">
        (4) 보유하고 있는 영화 수
    <select name="group">
        <option value="rating">등급별</option>
        <option value="category">장르별</option>
        <option value="special_features">특징별</option>
    </select>
    <input type="submit" value="Search">
    </form>
    </div>
</body>
</html>