<?php
class kula{
    private int $radius;
    public function __construct(int $ran){
        $this->radius=$ran;
    }
    public function obwod(){
        $obw=2*pi()*$this->radius;
        return number_format($obw,2,","," ");
    }
    public function pole(){
        $obj=4*pi()*$this->radius*$this->radius;
        return number_format($obj,2,","," ");
    }
    public function objetosc(){
        $pole=(4*pi()*pow($this->radius,3))/3;
        return number_format($pole,2,","," ");
    }
}
?>