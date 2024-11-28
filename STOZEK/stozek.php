<?php include_once 'przeciwprostokatna.php';
class stoz extends pp {
    private float $radius;
    private float $wys;
    public function __construct($r,$h){
        $this->radius = $r;
        $this->wys = $h;
    }
    private function PolePodstawy():float{
        return pi()*pow($this->radius,2);
    }
    private function PoleBoczne():float{
        return pi()*$this->radius*$this->PPk($this->radius,$this->wys);
    } 
    public function PoleCalkowite():float{
        return $this->PolePodstawy()+$this->PoleBoczne();
    }
    public function Obj():float{
        return (1/3)*pi()*pow($this->radius,2)*$this->wys;
    }
}



?>