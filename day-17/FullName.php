<?php


class FullName
{
    function makeFullName($fistName,$lastName){
        $fullName=$fistName.' '.$lastName;
        return $fullName;
    }
   function myCalculator($data){
        echo '<pre>';
        print_r($data);

        $btn =$data['btn'];
        switch ($btn){
            case '+':
                $result =$data['first_number']+ $data['last_number'];
                break;
            case '-':
                $result =$data['first_number']- $data['last_number'];
                break;
            case '*':
                $result =$data['first_number']* $data['last_number'];
                break;
            case '/':
                $result =$data['first_number']/ $data['last_number'];
                break;
            case '%':
                $result =$data['first_number']% $data['last_number'];
                break;
        }
        return $result;
   }
}