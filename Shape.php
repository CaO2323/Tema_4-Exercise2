<?php 
abstract class Shape{
    //Declare attributes;
    protected $width;
    protected $height;
    //Constructor Method;
    public function __construct($width, $height) {

        $this-> width = $width;
        $this-> height =$height;
    }
    //Own Méthod (function area to get area in ihherited classes);
    abstract public function Area();
}

?>
