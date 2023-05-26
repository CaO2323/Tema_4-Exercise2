<?php 

class Triangle extends Shape {

    //Constructor Method;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    //Getters;
    public function getWidth(){
        return $this-> width;
    }
    public function getHeight(){
        return $this -> height;
    }   
    //Triangle's own function;
    public function Area (){
        return 0.5 *($this -> width * $this -> height);
    } 
}




?>