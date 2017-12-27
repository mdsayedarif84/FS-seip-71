<?php
require_once 'Example.php';

class Demo extends Example
{
    public $age=22;
    protected $location='Farmget';
    private $mobile='01845711468';

    public function newOne(){
        //echo 'In new one';
        $this->addtition();
    }
    protected function newTwo(){
        //echo 'In new two';
        $this->substraction();
    }
    private function newThree(){
        echo 'In new three';
    }
}