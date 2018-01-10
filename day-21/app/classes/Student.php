<?php
namespace App\classes;


class Student
{
    private function dbConbection(){
        $hostName='localhost';
        $userName='root';
        $password='';
        $dbName='fs_bitm';
        $link=mysqli_connect($hostName,$userName,$password,$dbName);
        return $link;
    }


    public function saveStudentInfo($data){
//        echo '<pre>';
//        print_r($link);
        $sql="INSERT INTO students(name,email,mobile) VALUES ('$data[name]','$data[email]','$data[mobile]')";

        if(mysqli_query(Student::dbConbection(),$sql)){
            $message="Stuent information save successfully";
            return $message;
        } else{
            die('Query problem'.mysqli_error(Student::dbConbection()));
        }
    }
    public function getAllStudentInfo(){
        $sql="SELECT * FROM students";
        if(mysqli_query(Student::dbConbection(),$sql)){
            $queryResult=mysqli_query(Student::dbConbection(),$sql);
            return $queryResult;
        } else{
            die('Query problem'.mysqli_error(Student::dbConbection()));
        }
    }
    public function getStudentInfoById($id){
        $sql="SELECT * FROM students WHERE id='$id'";
        if(mysqli_query(Student::dbConbection(),$sql)){
            $queryResult=mysqli_query(Student::dbConbection(),$sql);
            return $queryResult;
        } else{
            die('Query problem'.mysqli_error(Student::dbConbection()));
        }
    }
    public function updateStudentInfo($data){
        $sql="UPDATE students SET name='$data[name]',email='$data[email]',mobile='$data[mobile]' WHERE id='$data[id]' ";
        if(mysqli_query(Student::dbConbection(),$sql)){
            header('Location:view-student.php');
        } else{
            die('Query problem'.mysqli_error(Student::dbConbection()));
        }
    }
    public function deleteStudentInfo($id){
       $sql="DELETE FROM students WHERE id='$id'";
        if(mysqli_query(Student::dbConbection(),$sql)){
            $message="Student info delete Successfully";
            return $message;
        } else{
            die('Query problem'.mysqli_error(Student::dbConbection()));
        }
    }
}