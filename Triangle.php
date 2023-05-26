<?php 

class Triangle extends Shape {

    //Constructor Method;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    } 
    //Triangle's own function;
    public function Area (){
        return 0.5 *($this -> width * $this -> height);
    } 
}




?>
