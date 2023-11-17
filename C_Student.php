<?php
 include_once("M_Student.php");
 class Ctrl_Student{

 public function invoke(){
    if(isset($_GET['stid'])){
    $modelStudent = new Model_Student();
    $student = $modelStudent-> getStudentDetail($_GET['stid']);
    include_once("StudentDetails.php");
 }
    else{
    $modelStudent = new Model_Student() ;
    $studentList = $modelStudent-> getAllStudent () ;
   include_once("Studentlist.php");
 }
 }};
 $C_Student = new Ctrl_Student() ;
$C_Student->invoke() ;
?>