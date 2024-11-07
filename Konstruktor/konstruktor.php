<?php
class Arytmetyka{
    public ?float $x= NULL;
    public ?float $y= NULL;
    function __construct($a,$b){
        $this ->x=$a;
        $this->y=$b;
    }

    function reszta(){
        if($this->y==0){
            return "Druga liczba nie może być zerem";
        }else{
            return $this->x%$this->y;
        }

    }
    function suma(){
        return $this->x+$this->y;
    }
    function roznica(){
        return $this->x-$this->y;
    }
    function iloczyn(){

        return $this->x*$this->y;
    }
    function iloraz(){
        if($this->y==0){
            echo "Druga liczba nie może być zerem";
        }else{
            return $this->x/$this->y;
        }
    }
    function potega(){
        return $this->x**$this->y;
    }

}



?>