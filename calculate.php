<?php

class calculator{
    public $x,$y,$z;
    function addition(){
        $this->z=$this->x+$this->y;
        return $this->z;
    }
    function subtraction(){
        $this->z=$this->x-$this->y;
        return $this->z;
    }
    function multiplication(){
        $this->z=$this->x*$this->y;
        return $this->z;
    }
    function divide(){
        $this->z=$this->x/$this->y;
        return $this->z;
    }
}
$addnum=new calculator();
$addnum->x=9;
$addnum->y=8;
echo "Sum of the numbers:".$addnum->addition()."<br>";
$subnum=new calculator();
$subnum->x=7;
$subnum->y=3;
echo "After subtracting the numbers:".$subnum->subtraction()."<br>";
$mulnum=new calculator();
$mulnum->x=6;
$mulnum->y=4;
echo "After multiplying the numbers:".$mulnum->multiplication()."<br>";
$divnum=new calculator();
$divnum->x=9;
$divnum->y=4;
echo "After dividing the numbers:".$divnum->divide();
?>