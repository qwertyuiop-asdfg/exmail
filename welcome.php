<?php 

//echo "Welcome";

class sum{
    public $a,$b,$c;
    function addtwonum(){
        $this->c=$this->a+$this->b;
        return $this->c;
    }
    
}

$c1=new sum();
$c1->a=5;
$c1->b=3;
 echo "Sum of two numbers :". $c1->addtwonum()."\n"; 

?>