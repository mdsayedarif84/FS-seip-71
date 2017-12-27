<?php


class Example
{
    public $name='Fariy Islam';
    protected $city='Maijdee';
    private $country='Bangladesh';
    public $value;

    public function __construct(){
       //echo 'In construct';
    }

    public function addtition(){
        echo 'In addition';
        //echo $this->value;
    }
    protected function substraction(){
        //echo $this->value;
        echo 'I am fs moon';
    }
    private function division(){
        echo 'In division';
    }
}