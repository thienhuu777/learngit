<?php
include_once("E_Student.php");

class Model_Student {
    public function __construct() {}
    
    public function getAllStudent() {
        $link = mysqli_connect("localhost", "root", "", "DULIEU") or die("Không thể kết nối đến CSDL MySQL");
        $sql = "SELECT * FROM sinhvien";
        $rs = mysqli_query($link, $sql);
        $students = array();
        
        while ($row = mysqli_fetch_array($rs)) {
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $university = $row['university'];
            
            $students[] = new Entity_Student($id, $name, $age, $university);
        }
        return $students;
    }
    
    public function getStudentDetail($stid) {
        $allStudents = $this->getAllStudent();
        return $allStudents[$stid];
    }
}
?>
