<?php
include_once("M_CapNhatSV.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $university = $_POST['university'];

    $model = new Model_Student();
    $updated = $model->updateStudent($id, $name, $age, $university);

    if ($updated) {
        echo "Sinh viên được cập nhật thành công.";
    } else {
        echo "Lỗi khi cập nhật sinh viên.";
    }
}
?>
