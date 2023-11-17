<?php
include_once("M_TimKiemSV.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keyword = $_POST['keyword'];

    $model = new Model_Student();
    $searchResults = $model->searchStudent($keyword);

    if (!empty($searchResults)) {
        echo "<h2>Kết quả tìm kiếm:</h2>";
        foreach ($searchResults as $student) {
            echo "ID: " . $student->id . ", Tên: " . $student->name . ", Tuổi: " . $student->age . ", Trường: " . $student->university . "<br>";
        }
    } else {
        echo "Không tìm thấy sinh viên nào phù hợp với từ khóa '$keyword'.";
    }
}
?>
