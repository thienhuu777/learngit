<?php
include_once("E_Student.php");

class Model_Student {
    private $link;

    public function __construct() {
        $this->link = mysqli_connect("localhost", "root", "", "DULIEU") or die("Không thể kết nối đến CSDL MySQL");
    }

    public function deleteStudent($id) {
        $sql = "DELETE FROM sinhvien WHERE id='$id'";
        $result = mysqli_query($this->link, $sql);

        if ($result) {
            return true; // Trả về true nếu xóa thành công
        } else {
            return false; // Trả về false nếu có lỗi khi xóa sinh viên
        }
    }

    // Các phương thức khác tương tự
}
?>
