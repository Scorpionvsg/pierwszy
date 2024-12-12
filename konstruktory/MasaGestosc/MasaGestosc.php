<?php
class MG{
    private float $prom;
    private string $subs;
    private float $gest;
    public function __construct($s,$r){
        $this->subs=$s;
        $this->prom=$r;
    }
    private function obj():float{
        $obj=((4*pi()*pow($this->prom,3))/3);
        return $obj;
        
    }
    public function masa():float{
        $gips=2350;
        $rtec=13534;
        $zloto=19280;
        $woda=997;
        if(strcasecmp($this->subs,"gips")==0){
            return $this->obj()*$gips;
        }else if (strcasecmp($this->subs,"rtec")==0){
            return $this->obj()*$rtec;
        }else if(strcasecmp($this->subs,"zloto")==0){
            return $this->obj()*$zloto;
        }else if(strcasecmp($this->subs,"woda")==0){
            return $this->obj()*$woda;
        }else
        return "Źle podano nazwe substancji";
    }
}
?>