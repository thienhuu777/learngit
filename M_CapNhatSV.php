<?php
include_once("E_Student.php");

class Model_Student {
    private $link;

    public function __construct() {
        $this->link = mysqli_connect("localhost", "root", "", "DULIEU") or die("Không thể kết nối đến CSDL MySQL");
    }

    public function updateStudent($id, $name, $age, $university) {
        $sql = "UPDATE sinhvien SET name='$name', age='$age', university='$university' WHERE id='$id'";
        $result = mysqli_query($this->link, $sql);

        if ($result) {
            return true; // Trả về true nếu cập nhật thành công
        } else {
            return false; // Trả về false nếu có lỗi khi cập nhật sinh viên
        }
    }

    // Các phương thức khác tương tự
}
?>
