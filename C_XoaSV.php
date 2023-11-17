<?php
include_once("M_XoaSV.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $model = new Model_Student();
    $deleted = $model->deleteStudent($id);

    if ($deleted) {
        echo "Sinh viên đã được xóa thành công.";
    } else {
        echo "Lỗi khi xóa sinh viên.";
    }
}
?>
