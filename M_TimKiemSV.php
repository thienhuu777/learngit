<?php
include_once("E_Student.php");

class Model_Student {
    private $link;

    public function __construct() {
        $this->link = mysqli_connect("localhost", "root", "", "DULIEU") or die("Không thể kết nối đến CSDL MySQL");
    }

    public function searchStudent($keyword) {
        $sql = "SELECT * FROM sinhvien WHERE name LIKE '%$keyword%' OR university LIKE '%$keyword%'";
        $result = mysqli_query($this->link, $sql);
        $students = array();

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $student = new Entity_Student($row['id'], $row['name'], $row['age'], $row['university']);
                $students[] = $student;
            }
        }

        return $students;
    }

    // Các phương thức khác tương tự
}
?>
