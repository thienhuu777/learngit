
<?php
include_once("E_Student.php");

class Model_Student {
    public function __construct() {}

    public function insertStudent($name, $age, $university) {
        $link = mysqli_connect("localhost", "root", "", "DULIEU") or die("Không thể kết nối đến CSDL MySQL");

        $sql = "INSERT INTO sinhvien (name, age, university) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($link, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sis", $name, $age, $university);
            $result = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            if ($result) {
                return true; // Trả về true nếu chèn thành công
            } else {
                return false; // Trả về false nếu có lỗi khi chèn sinh viên
            }
        } else {
            return false; // Trả về false nếu có lỗi trong truy vấn SQL
        }
    }
}
?>