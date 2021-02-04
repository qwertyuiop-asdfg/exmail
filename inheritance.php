<?php

class student{
    public $subject;
    public $fees;
    public $score;

function __construct($s,$f,$sc){
    $this->subject=$s;
    $this->fees=$f;
    $this->score=$sc;
}
function manish(){
    echo "Subject name:".$this->subject."<br>";
    echo "Student fees:".$this->fees."<br>";
    echo "Student score:".$this->score."<br><br>";
}
}

class teacher extends student{

    public $salary=40000;
    public $number=1000;
    public $total;

function manish(){
    $this->total=$this->salary+$this->number+$this->fees;

    echo "Subject name:".$this->subject."<br>";
    echo "Student fees:".$this->fees."<br>";
    echo "Student score:".$this->score."<br><br>";
    echo "Total sum:".$this->total;

}
}
$m1=new student("maths",5100,90);
$k1=new teacher("history",500,40);
$m1->manish();
$k1->manish();
?>