<?php 

class Rectangle extends Shape{
    
    //Constructor method;
    public function __construct($width, $height) {
        $this -> width = $width;
        $this -> height = $height;
    }
    //Getters;
    public function getWidth(){
        return $this -> width;
    }
    public function getHeight(){
        return $this -> height;
    }
    //Triangle's own function;
    public function Area(){
        return ($this->width * $this->height);
    }
}
