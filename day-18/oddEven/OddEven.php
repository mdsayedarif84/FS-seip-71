<?php
/**
 * Created by PhpStorm.
 * User: EXPERT
 * Date: 27-Dec-17
 * Time: 7:09 PM
 */

class OddEven
{
    public function OddEven(){
        if (isset($_POST['btn'])){
            $first=$_POST['satartingNumber'];
            $last=$_POST['endingNumber'];
            $choice=$_POST['check'];
            $res="";
            if($first<$last){
                for($i=$first; $i<=$last;$i++){
                    if($i%2!=0 && $choice=='Odd'){
                        $res.=$i." ";//$res=$res$i""
                    } else  if($i%2==0 && $choice=='Even'){
                        $res.=$i." ";//$res=$res$i""
                    }
                }
                return $res;
            } else {
                for($i=$last; $i<=$first;$i++){
                    if($i%2!=0 && $choice=='Odd'){
                        $res.=$i." ";//$res=$res$i""
                    } else  if($i%2==0 && $choice=='Even'){
                        $res.=$i." ";//$res=$res$i""
                    }
                }
                return $res;
            }
        }
    }
}