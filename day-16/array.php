<?php
//$data=[];

//Numeric aray

//$data=[0]=10;
//$data=[1]=20;
//$data=[2]=30;
//$data=[3]=40;

//associative array

//$data['name']='Sayed';
//$data['city']='Maijdee';
//$data['country']='Bangladesh';
// $data [10, 20, 30, 'Sayed', 'Maijdee', 'Bangladesh'];
// echo $data[0];
//$data = [
//    'name'      => 'Sayed',
//    'city'      => 'Maijdee',
//    'country'   => 'Bangladesh',
//    'phone'     => '01845711468',
//    'gender'    => 'male'
//  ];
//echo $data['name'];
//foreach ($data as $value){
//    echo $value.'<br>';
//}
//echo '<pre>';
//print_r($data);
//echo '<pre>';
//var_dump($data);

//multidimention array

//$data=[];
//
//$data[0][0]=10;
//$data[0][1]=20;
//$data[0][2]=30;
//
//$data[1][0]=40;
//$data[1][1]=50;
//$data[1][2]=60;
//
//$data[2][0]=70;
//$data[2][1]=80;
//$data[2][2]=90;
//
//$data[3][0]=100;
//$data[3][1]=110;
//$data[3][2]=120;
//foreach ($data as $value){
//    //echo $value[0].' '.$value[1].' '.$value[2].'<br>';
//    foreach ($value as $v_value){
//        echo  $v_value.' ';
//    }
//    echo '<br>';
//}
//
//function demo( $firstName=null,$lastName=null){
//    $fullName= $firstName.' '.$lastName;
//    //echo $fullName;
//    return $fullName;
//}
//echo '<br>.........<br>';
//echo demo('Sayed');
//echo '<br>.........<br>';
//$res= demo('Friya ','Islam');
//echo 'full name is :'.$res;
//echo '<br>.........<br>';
//$res= demo('Sumaiya','Islam');
//echo '<h1>'.$res.'</h1>';

class Demo{
    public $name='Sayed Arif';
    public $city='Maijdee';

    function add(){
        echo 'In Add';
    }
    function hello(){
        echo 'In hello';
    }
}
$demo =new Demo;
//$demo->add();
echo $demo->name;