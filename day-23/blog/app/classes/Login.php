<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/7/2018
 * Time: 11:57 AM
 */

namespace App\classes;
use App\classes\Database;


class Login
{
    public function adminLoginCheck($data){
        $email=$data['email'];
        $password=md5($data['password']);
        $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
        if (mysqli_query(Database::dbConnection(),$sql)){
            $queryResut=mysqli_query(Database::dbConnection(),$sql);
            $user=mysqli_fetch_assoc($queryResut);
//            echo '<pre>';
//            print_r($user);
            if ($user){
                session_start();
                $_SESSION['id']=$user['id'];
                $_SESSION['name']=$user['name'];
                header('Location:dashboard.php');
            }else{
                $message="Please use valid email address.";
                return $message;
            }
        }else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }
    }
    public function adminLogout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location:index.php');
    }
    public function saveAddCategoryInfo($data){
        $sql="INSERT INTO addcategory(category_name,category_discription,status) VALUES ('$data[category_name]','$data[category_discription]','$data[status]')";
        if (mysqli_query(Database::dbConnection(),$sql)){
            $message="Add Category Information Save Successfully";
            return $message;
        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }
    public function getAddCategoryData(){
        $sql="SELECT * FROM addcategory";
        if (mysqli_query(Database::dbConnection(),$sql)){
            $queryResult=(mysqli_query(Database::dbConnection(),$sql));
            return $queryResult;
        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }
    public function editAddCategoryData($id){
        $sql="SELECT * FROM addcategory WHERE id='$id'";
        if (mysqli_query(Database::dbConnection(),$sql)){
            $queryResult=(mysqli_query(Database::dbConnection(),$sql));
            return $queryResult;
        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }
    public function updateAddCategoryData($data){
        $sql="UPDATE addcategory SET category_name='$data[category_name]',category_discription='$data[category_discription]',status='$data[status]' WHERE id='$data[id]'";
        if (mysqli_query(Database::dbConnection(),$sql)){
            header('Location:manage-category.php');
//            $message='Update Your Data Successfully';
//            return $message;
        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }
    public function deletAddCategoryData($id){
        $sql="DELETE FROM addcategory WHERE id='$id'";
        if (mysqli_query(Database::dbConnection(),$sql)){
            $message="Delete Your Data Successfully";
            return $message;
        }else{
            die('Query Problem'.mysqli_error(Database::dbConnection));
        }
    }
}