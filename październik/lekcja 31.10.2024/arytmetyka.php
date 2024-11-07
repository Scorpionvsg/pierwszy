<?php
    class Arytmetyka{
        public ?float $x= NULL;
        public ?float $y =NULL;
        public $wyn;
        function reszta(){
            if($this->y==0){
                return "Druga liczba nie może być zerem";
            }else{
                $this->wyn =$this->x%$this->y;
                return $this->wyn;
            }

        }
        function suma(){
            $this->wyn =$this->x+$this->y;
            return $this->wyn;
        }
        function różnica(){
            $this->wyn =$this->x-$this->y;
            return $this->wyn;
        }
        function iloczyn(){
            $this->wyn =$this->x*$this->y;
            return $this->wyn;
        }
        function iloraz(){
            if($this->y==0){
                echo "Druga liczba nie może być zerem";
            }else{
                $this->wyn =$this->x/$this->y;
                return $this->wyn;
            }
        }
        function potęga(){
            $this->wyn=$this->x**$this->y;
            return $this->wyn;
        }

    }
   
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reszta z dzielenia</title>
    <style>
        body{
            background-color:skyblue;
            
        }
    </style>
</head>
<body>
<ul style="list-style-type:circle ;">
    <?php 
    $pom=new Arytmetyka();
    $pom->x=4;
    $pom->y=0;
    ?>
    <li>  Suma liczb <b><?php echo$pom->x?></b> i <b><?php echo$pom->y?></b> wynosi <b><?php echo $pom->suma();?></b></li>
    <li>  Różnica liczb <b><?php echo$pom->x?></b> i <b><?php echo$pom->y?></b> wynosi <b><?php echo $pom->różnica();?></b></li>
    <li>  Iloczyn liczb <b><?php echo$pom->x?></b> i <b><?php echo$pom->y?></b> wynosi <b><?php echo $pom->iloczyn();?></b></li>
    <li>  Iloraz liczb <b><?php echo$pom->x?></b> i <b><?php echo$pom->y?></b> wynosi <b><?php echo $pom->iloraz();?></b></li>
    <li>  Reszta z dzielenia liczb <b><?php echo$pom->x?></b> i <b><?php echo$pom->y?></b> wynosi <b><?php echo $pom->reszta();?></b></li>
    <li>  Liczba <b><?php echo$pom->x?></b> do potęgi <b><?php echo$pom->y?></b> wynosi <b><?php echo $pom->potęga();?></b></li>
</ul>
</body>
</html>