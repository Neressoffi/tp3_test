<?php


class Animal{
    public $name;
    public $age;
    public $weight;
 public $color;
 public function __construct($name,$age,$weight,$color){
    $this->name=$name;
    $this->age=$age;
    $this->weight=$weight;
    $this->color=$color;
 }
 public function getName(){
    return $this->name;
    }
    public function getAge(){
        return $this->age;
        }

    }



