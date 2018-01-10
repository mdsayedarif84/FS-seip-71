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
        $sql="SELECT * FROM users WHERE email= '$email' AND password='$password'";
        if (mysqli_query(Database::dbConnection(),$sql)){
            $queryResut=mysqli_query(Database::dbConnection(),$sql);
            $user=mysqli_fetch_assoc($queryResut);
//            echo '<pre>';
//            print_r($user);
            if ($user){
                header('Location:dashboard.php');
            }else{
                $message="Please use valid email address.";
                return $message;
            }
        }else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }
    }
}