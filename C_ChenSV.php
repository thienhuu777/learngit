<?php
include_once("M_ChenSV.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $university = $_POST['university'];

    $model = new Model_Student();
    $inserted = $model->insertStudent($name, $age, $university);

    if ($inserted) {
        echo "<script>alert('Sinh viên được chèn thành công.');</script>";
    } else {
        echo "<script>alert('Lỗi khi chèn sinh viên.');</script>";
    }
}
?>
