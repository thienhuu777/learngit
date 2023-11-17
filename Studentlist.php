<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h2>Danh sách sinh viên:</h2>

    <?php
    for ($i = 0; $i < sizeof($studentList); $i++) {
        echo "<p>{$i}. <a href='?stid={$studentList[$i]->id}'>{$studentList[$i]->name}</a></p>";
    }
    ?>
    <br>
    <p><a href="index.php">Trang chủ</a></p>
</body>
</html>