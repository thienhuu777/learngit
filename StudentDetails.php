<?php
// Kết nối đến cơ sở dữ liệu và lấy dữ liệu sinh viên
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DULIEU";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Thực hiện truy vấn để lấy thông tin sinh viên từ cơ sở dữ liệu
$sql = "SELECT id, name, age, university FROM sinhvien WHERE id = 1"; // Thay đổi điều kiện WHERE tùy thuộc vào cấu trúc cơ sở dữ liệu của bạn
$result = $conn->query($sql);

// Kiểm tra xem có dữ liệu trả về không
if ($result->num_rows > 0) {
    // Lấy dữ liệu của sinh viên và gán vào biến $student
    $student = $result->fetch_assoc();
} else {
    echo "Không có dữ liệu sinh viên";
}

// Đóng kết nối
$conn->close();
?>

<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Thông tin chi tiết sinh viên</title>
    </head>
    <body>
        <h2>Chi tiết sinh viên</h2>
        <?php
        if (isset($student)) {
            //echo "<p><b>id: " . $student['id'] . "</b></p>";
            echo "<p><b>Name: " . $student['name'] . "</b></p>";
            echo "<p>Age: " . $student['age'] . "</p>";
            echo "<p>University: " . $student['university'] . "</p></br>";
        } else {
            echo "Không có thông tin sinh viên để hiển thị";
        }
        ?>
        <p><a href="javascript:history.back()">Quay lại</a></p>
    </body>
</html>
