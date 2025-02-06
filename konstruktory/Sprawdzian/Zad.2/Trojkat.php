<?php
    class Trojkat{
        private float $x;
        private float $y;
        public function __construct($a,$b){
            $this->x = $a;
            $this->y = $b;
        }
        public function poleTrojkata(){
            return ($this->x*$this->y)/2;
        }

    }

?>