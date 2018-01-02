<?php
namespace App\classes;


class Student
{
    public function saveStudentInfo($data){
        $link=mysqli_connect('localhost', 'root','', 'fs_bitm');
//        echo '<pre>';
//        print_r($link);
        $sql="INSERT INTO students(name,email,mobile) VALUES ('$data[name]','$data[email]','$data[mobile]')";

        if(mysqli_query($link,$sql)){
            $message="Stuent information save successfully";
            return $message;
        } else{
            die('Qurery problem'.mysqli_error($link));
        }
    }
    public function getAllStudentInfo(){
        $link=mysqli_connect('localhost', 'root','', 'fs_bitm');
        $sql="SELECT * FROM students";
        if(mysqli_query($link,$sql)){
            $queryResult=mysqli_query($link,$sql);
            return $queryResult;
        } else{
            die('Qurery problem'.mysqli_error($link));
        }
    }
}