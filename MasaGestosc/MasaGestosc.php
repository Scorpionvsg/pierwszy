<?php
class MG{
    private float $prom;
    private string $subs;
    private float $gest;
    public function __construct($s,$r){
        $this->subs=$s;
        $this->prom=$r;
    }
    private function obj(){
        $obj=((4*pi()*pow($this->prom,3))/3)/1000000;
        return $obj;
        
    }
    public function masa(){
        $gips=2350;
        $rtec=13534;
        $zloto=19280;
        $woda=997;
        if(strcasecmp($this->subs,"gips")==0){
            return number_format($this->obj()*$gips,3,",");
        }else if (strcasecmp($this->subs,"rtec")==0){
            return number_format($this->obj()*$rtec,3,",");
        }else if(strcasecmp($this->subs,"zloto")==0){
            return number_format($this->obj()*$zloto,3,",");
        }else if(strcasecmp($this->subs,"woda")==0){
            return number_format($this->obj()*$woda,3,",");
        }else
        return "Źle podano nazwe substancji";
    }
}
?>