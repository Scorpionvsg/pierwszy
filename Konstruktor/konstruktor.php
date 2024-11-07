<?php
class Arytmetyka{
    public ?float $x= NULL;
    public ?float $y= NULL;
    public function __construct($a,$b){
        $this ->x=$a;
        $this->y=$b;
    }

    public function reszta(){
        if($this->y==0){
            return "Druga liczba nie może być zerem";
        }else{
            return $this->x%$this->y;
        }

    }
    public function suma(){
        return $this->x+$this->y;
    }
    public function roznica(){
        return $this->x-$this->y;
    }
    public function iloczyn(){

        return $this->x*$this->y;
    }
    public function iloraz(){
        if($this->y==0){
            echo "Druga liczba nie może być zerem";
        }else{
            return $this->x/$this->y;
        }
    }
    public function potega(){
        return $this->x**$this->y;
    }

}



?>